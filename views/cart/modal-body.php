<?php
if (empty($session['cart']))
    echo 'Cart empty';
?>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
    <tr>
      <th>Name</th>
      <th>Price</th>
      <th>Quantity</th>
    </tr>
    </thead>
    <tbody>
    <? foreach ($session['cart'] as $id => $product) : ?>
      <tr>
        <td><?= $product['name'] ?></td>
        <td><?= $product['price'] ?></td>
        <td><?= $product['quantity'] ?></td>
        <td>
          <button class="btn btn-danger" id="deleteInCart"><i class="fa fa-trash"></i></button>
        </td>
      </tr>
    <? endforeach; ?>
    <tr>
      <td colspan="3">Total:</td>
      <td><?= $session['cart.total'] ?></td>
    </tr>
    <tr>
      <td colspan="3">Summary:</td>
      <td><?= $session['cart.sum'] ?></td>
    </tr>
    </tbody>
  </table>
</div>
