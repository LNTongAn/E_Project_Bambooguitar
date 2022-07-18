<?php $__env->startSection('title', 'OrganicFood'); ?>
<?php $__env->startSection('content'); ?>

<br><br>
    <nav class="grid wide bg_white_container">

        <table id="cart" class="table table-hover ">
            <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                </tr>
            </thead>
            <tbody>


                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="<?php echo e(url('images/'.$p->image)); ?>" width="100" height="100" /></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin"><?php echo e($p->name); ?></h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">$<?php echo e($p->price); ?></td>
                    <td data-th="Quantity">
                        <input type="number" value="1" class="form-control quantity" />
                    </td>
                    <td data-th="Subtotal" class="text-center">$<?php echo e($p->price * 1); ?></td>

                </tr>


            </tbody>
            <tfoot>
                <tr class="visible-xs">
                    <td class="text-center"><strong>Total </strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Total: $<?php echo e($total = $p->price * 1); ?> </strong></td>
                </tr>
            </tfoot>
        </table>

    </nav>
    <div class="grid wide">
        <div style="border-bottom:1px solid"></div><br>

        <form action="">
        <div class="row">
            <div class="col l-6 m-6 c-12">
                Name: <input class="form-control" type="text" name="name" required>
            </div>
            <div class="col l-6 m-6 c-12">
                Tel: <input class="form-control" type="number" name="tel" required>
            </div>
            <div class="col l-6 m-6 c-12">
                Address: <input class="form-control" type="text" name="address" required>
            </div>
            <div class="col l-6 m-6 c-12">

            </div>
            <div>

            </div>
            <div>
                <h3>Total</h3>
                Total: $ <?php echo e($p->price*1); ?>

                <input type="hidden" value="<?php echo e($p->price*1); ?>" name="total">
            <h3>Phương thức thanh toán</h3>
            <input name="method_pay" type="radio" value="0" checked> cash payment &nbsp&nbsp&nbsp
            <input name="method_pay" type="radio" value="1"> online paying
            <br><br>
            <button style="padding:5px 10px 5px 10px; border:none; color:#fff; background-color:#33CC33; border-radius:15px; font-size:larger;">Pay</button>
        </div>
        </div>
    </form>

    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-section'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/home/checkOut.blade.php ENDPATH**/ ?>