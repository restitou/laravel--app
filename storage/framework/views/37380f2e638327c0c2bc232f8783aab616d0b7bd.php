
<?php $__env->startSection('content'); ?>
    <?php if(isset($task)): ?>
        <h3>Edit : </h3>
        <?php echo Form::model($task, ['route' => ['task.update', $task->id], 'method' => 'patch']); ?>

    <?php else: ?>
        <h3>Add New Task : </h3>
        <?php echo Form::open(['route' => 'task.store']); ?>

    <?php endif; ?>
        <div class="form-inline">
            <div class="form-group">
                <?php echo Form::text('name',null,['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::submit($submit, ['class' => 'btn btn-primary form-control']); ?>

            </div>
        </div>
    <?php echo Form::close(); ?>

    <hr>
    <h4>Tasks To Do : </h4>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($task->name); ?></td>
                    <td>
                        <?php echo Form::open(['route' => ['task.destroy', $task->id], 'method' => 'delete']); ?>

                            <div class='btn-group'>
                                <a href="<?php echo route('task.edit', [$task->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                            </div>
                        <?php echo Form::close(); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('todolist::app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-vuejs-todolist-master\laravel-vuejs-todolist-master\packages\wisdmlabs\todolist\src/views/list.blade.php ENDPATH**/ ?>