      <div class="hero-unit">
        <h2>Участники</h2>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Кто</th>
      <th>Интересы</th>
    </tr>
  </thead>
  <tbody>
<? foreach( $users as $u ){ ?>
    <tr>
      <td><a href="<?= $u['identity'] ?>"><?= $u['first_name'] ?> <?= $u['last_name'] ?></a></td>
      <td><?= $u['interest'] ?></td>
    </tr>
<? } ?>
  </tbody>
</table>

      </div>
      
