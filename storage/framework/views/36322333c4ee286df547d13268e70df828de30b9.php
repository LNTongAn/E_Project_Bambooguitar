<?php $__env->startSection('title', 'OrganicFood'); ?>
<?php $__env->startSection('content'); ?>
    <br>
    <nav class="grid wide bg_white_container">

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <table id="cart" class="table table-hover ">
            <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            <tbody>

                <?php $total = 0; ?>

                <?php if(session('cart')): ?>
                    <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $total += $details['price'] * $details['quantity']; ?>

                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-3 hidden-xs"><img src="<?php echo e(url('images/' . $details['image'])); ?>"
                                            width="100" height="100" /></div>
                                    <div class="col-sm-9">
                                        <h4 class="nomargin"><?php echo e($details['name']); ?></h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">$<?php echo e($details['price']); ?></td>
                            <td data-th="Quantity">
                                <input type="number" value="<?php echo e($details['quantity']); ?>" class="form-control quantity" />
                            </td>
                            <td data-th="Subtotal" class="text-center">$<?php echo e($details['price'] * $details['quantity']); ?>

                            </td>
                            <td class="actions" data-th="">
                                <button class="btn btn-info btn-sm update-cart" data-id="<?php echo e($id); ?>"><i
                                        class="update_cart fa fa-refresh"></i></button>
                                <button class="btn btn-danger btn-sm remove-from-cart" data-id="<?php echo e($id); ?>"><i
                                        class="remove_cart fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </tbody>
            <tfoot>
                <tr class="visible-xs">
                    <td class="text-center"><strong>Total <?php echo e($total); ?></strong></td>
                </tr>
                <tr>
                    <td><a href="<?php echo e(url('/')); ?>" class="continue_shopping_cart"><i class="fa fa-angle-left"></i>
                            Continue Shopping</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Total $<?php echo e($total); ?></strong></td>
                </tr>
            </tfoot>
        </table>


        <script type="text/javascript">
            $(".update-cart").click(function(e) {
                e.preventDefault();

                var ele = $(this);

                $.ajax({
                    url: "<?php echo e(url('home/update-cart')); ?>",
                    method: "patch",
                    data: {
                        _token: '<?php echo e(csrf_token()); ?>',
                        id: ele.attr("data-id"),
                        quantity: ele.parents("tr").find(".quantity").val()
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            });

            $(".remove-from-cart").click(function(e) {
                e.preventDefault();

                var ele = $(this);

                if (confirm("Are you sure")) {
                    $.ajax({
                        url: "<?php echo e(url('home/remove-from-cart')); ?>",
                        method: "DELETE",
                        data: {
                            _token: '<?php echo e(csrf_token()); ?>',
                            id: ele.attr("data-id")
                        },
                        success: function(response) {
                            window.location.reload();
                        }
                    });
                }
            });
        </script>

    </nav>


    <!--checkOut-->
    <div class="grid wide">
        <div style="border-bottom:1px solid"></div><br>
        <h2>Order</h2><br>
        <form action="<?php echo e(url('home/storeOrder')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row">

                <?php if(session('member')): ?>
                    <input type="hidden" name="member_id" id="member_id" value="<?php echo e(session('member')->id); ?>">
                    <input type="hidden" name="shipping_email" id="shipping_email" value="<?php echo e(session('member')->email); ?>">
                    <input type="hidden" name="name" id="name" value="<?php echo e(session('member')->fullname); ?>">
                <?php endif; ?>

                <?php
                    use Carbon\Carbon;
                    // date_default_timezone_set('Asia/Saigon');
                    $mytime = Carbon::now();
                    $disable = session('cart') ? '' : 'disabled';
                ?>
                <input type="hidden" name="date" id="date" value="<?php echo e($mytime); ?>">
                <input type="hidden" value="<?php echo e($total); ?>" name="total_amount" id="total_amount">

                <?php if(!session('member')): ?>
                    <div class="col l-6 m-6 c-12">
                        Name: <input class="form-control" type="text" name="name" id="name" required>
                    </div>
                    <div class="col l-6 m-6 c-12">
                        Email: <input class="form-control" type="text" name="shipping_email" id="shipping_email" required>
                    </div>
                <?php endif; ?>

                <div class="col l-6 m-6 c-12">
                    Address: <input class="form-control" type="text" name="shipping_address" id="shipping_address"
                        required>
                </div>
                <div class="col l-6 m-6 c-12">

                </div>

                <div>
                    <h3>Payment methods</h3>
                    <input name="payment_term" id="payment_term" type="radio" value="0" checked> cash payment
                    &nbsp&nbsp&nbsp
                    <input name="payment_term" id="payment_term" type="radio" value="1"> online paying
                    <br>
                    <h3>Total</h3>
                    Total: $<?php echo e($total); ?>

                    <br><br>
                    <button
                        style="padding:5px 10px 5px 10px; border:none; color:#fff; background-color:#33CC33; border-radius:15px; font-size:larger;"
                        <?php echo e($disable); ?>>Pay</button>
                </div>
            </div>
        </form>

    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-section'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/home/cart.blade.php ENDPATH**/ ?>