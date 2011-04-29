<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $country->getId() ?></td>
    </tr>
    <tr>
      <th>Iso:</th>
      <td><?php echo $country->getIso() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $country->getName() ?></td>
    </tr>
    <tr>
      <th>Printable name:</th>
      <td><?php echo $country->getPrintableName() ?></td>
    </tr>
    <tr>
      <th>Iso3:</th>
      <td><?php echo $country->getIso3() ?></td>
    </tr>
    <tr>
      <th>Numcode:</th>
      <td><?php echo $country->getNumcode() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('country/edit?id='.$country->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('country/index') ?>">List</a>
