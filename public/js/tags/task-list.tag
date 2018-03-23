<task-list>

    <div class="card">
        <div class="card-header">
            Add Task
        </div>
        <div class="card-body">

            <!-- New Task Form -->
            <form action="/tasks/add" method="POST" class="form-horizontal" onsubmit={ add }>
                
                <input type="hidden" name="_token" value={ this.opts.csrf_token }>

                <!-- Task Name -->
                <div class="form-group">
                    <label for="task-title" class="col-sm-3 control-label">Title</label>

                    <div class="col-sm-6">
                        <input ref="title" ype="text" name="title" id="task-title" class="form-control">
                        <if={ errors.title != '' } small class="form-text text-danger">{ errors.title }</small>
                    </div>
                </div>

                <div class="form-group">
                    <label for="task-name" class="col-sm-3 control-label">Description</label>

                    <div class="col-sm-6">
                        <input ref="description" type="text" name="description" id="task-description" class="form-control">
                        <if={ errors.description != '' } small class="form-text text-danger">{ errors.description }</small>
                    </div>
                </div>

                <!-- Add Task Button -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button ref="btnAdd" type="submit" class="btn btn-default">
                            <i class="fa fa-plus"></i> Add 
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Current Tasks
        </div>
        <div class="card-body">
            <div class="list-group">
                <div if={ items.length == 0 } class="list-group-item">Please add a new task</div>
                <div each={ items } class="list-group-item flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{ title }</h5>
                        <button type="button" class="btn btn-link btn-remove" onclick={ remove } title="Delete Task"><i class="fa fa-trash-alt"></i></button>
                    </div>
                    <p class="mb-1">{ description }</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        var me = this;

        me.items = [];

        me.errors = {
            title: '',
            description: ''
        };

        me.on('mount', function() {
            // right after the tag is mounted on the page
            $.get('/tasks', function(collection) {
                me.update({
                    items: collection
                });
            });
        });

        /**
         * Add new task to list
         *
         * @param {Object} e    Event object 
         * @return void
         */
        add(e) {
            e.preventDefault();

            // remove highlight from add button
            $(me.refs.btnAdd).blur(); 

            var action = $(e.target).attr('action');
            var title = me.refs.title.value;
            var description = me.refs.description.value;

            if (title == '') me.errors.title = 'The title field is required.';
            else me.errors.title = '';

            if (description == '') me.errors.description = 'The description field is required.';
            else me.errors.description = '';

            if (me.errors.title != '' || me.errors.description != '') return;

            $.post(action, {
                title: title,
                description: description,
                '_token': me.opts.csrf_token
            }, function(model) {
                // add to collection
                me.items.unshift(model);

                // clear form fields
                me.refs.title.value = '';
                me.refs.description.value = '';

                me.update();
            });
        }

        /**
         * Remove task from list
         *
         * @param {Object} e    Event object 
         * @return void
         */
        remove(e) {
            var item = e.item; // task item

            var listItemEl = $(e.target).closest('.list-group-item');

            $.ajax({
                method: 'delete',
                url: "/tasks/"+ item.id,
                data: {
                    '_token': me.opts.csrf_token
                },
                context: listItemEl
            }).done(function() {
                this.fadeOut(400, function() {
                    var index = me.items.indexOf(item);

                    // remove from collection
                    me.items.splice(index, 1);
                    me.update();
                });
            });
        }
    </script>

</task-list>