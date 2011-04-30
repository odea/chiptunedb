<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $label->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $label->getName() ?></td>
    </tr>
    <tr>
      <th>Logo:</th>
      <td><?php echo $label->getLogo() ?></td>
    </tr>
    <tr>
      <th>Url:</th>
      <td><?php echo $label->getUrl() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $label->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $label->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('label/edit?id='.$label->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('label/index') ?>">List</a>
