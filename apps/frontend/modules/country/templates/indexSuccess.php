<h1>Countrys List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Iso</th>
      <th>Name</th>
      <th>Printable name</th>
      <th>Iso3</th>
      <th>Numcode</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($countrys as $country): ?>
    <tr>
      <td><a href="<?php echo url_for('country/show?id='.$country->getId()) ?>"><?php echo $country->getId() ?></a></td>
      <td><?php echo $country->getIso() ?></td>
      <td><?php echo $country->getName() ?></td>
      <td><?php echo $country->getPrintableName() ?></td>
      <td><?php echo $country->getIso3() ?></td>
      <td><?php echo $country->getNumcode() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('country/new') ?>">New</a>
