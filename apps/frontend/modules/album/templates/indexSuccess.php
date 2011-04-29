<h1>Albums List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Image</th>
      <th>Year</th>
      <th>Is activated</th>
      <th>Is va</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($albums as $album): ?>
    <tr>
      <td><a href="<?php echo url_for('album/show?id='.$album->getId()) ?>"><?php echo $album->getId() ?></a></td>
      <td><?php echo $album->getTitle() ?></td>
      <td><?php echo $album->getImage() ?></td>
      <td><?php echo $album->getYear() ?></td>
      <td><?php echo $album->getIsActivated() ?></td>
      <td><?php echo $album->getIsVa() ?></td>
      <td><?php echo $album->getCreatedAt() ?></td>
      <td><?php echo $album->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('album/new') ?>">New</a>
