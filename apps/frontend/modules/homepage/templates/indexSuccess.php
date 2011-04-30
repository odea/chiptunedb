<h1>Last Albums</h1>

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
<h1>Last Artists</h1>

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
