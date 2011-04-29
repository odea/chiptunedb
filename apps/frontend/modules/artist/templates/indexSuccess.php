<h1>Artists List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Url</th>
      <th>Image</th>
      <th>Is activated</th>
      <th>Country</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($artists as $artist): ?>
    <tr>
      <td><a href="<?php echo url_for('artist/show?id='.$artist->getId()) ?>"><?php echo $artist->getId() ?></a></td>
      <td><?php echo $artist->getName() ?></td>
      <td><?php echo $artist->getUrl() ?></td>
      <td><?php echo $artist->getImage() ?></td>
      <td><?php echo $artist->getIsActivated() ?></td>
      <td><?php echo $artist->getCountryId() ?></td>
      <td><?php echo $artist->getCreatedAt() ?></td>
      <td><?php echo $artist->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('artist/new') ?>">New</a>
