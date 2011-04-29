<h1>Tracks List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Number</th>
      <th>Artist</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tracks as $track): ?>
    <tr>
      <td><a href="<?php echo url_for('track/show?id='.$track->getId()) ?>"><?php echo $track->getId() ?></a></td>
      <td><?php echo $track->getTitle() ?></td>
      <td><?php echo $track->getNumber() ?></td>
      <td><?php echo $track->getArtistId() ?></td>
      <td><?php echo $track->getCreatedAt() ?></td>
      <td><?php echo $track->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('track/new') ?>">New</a>
