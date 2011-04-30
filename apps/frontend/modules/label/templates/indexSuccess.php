<h1>Labels List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Logo</th>
      <th>Url</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($labels as $label): ?>
    <tr>
      <td><a href="<?php echo url_for('label/show?id='.$label->getId()) ?>"><?php echo $label->getId() ?></a></td>
      <td><?php echo $label->getName() ?></td>
      <td><?php echo $label->getLogo() ?></td>
      <td><?php echo $label->getUrl() ?></td>
      <td><?php echo $label->getCreatedAt() ?></td>
      <td><?php echo $label->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('label/new') ?>">New</a>
