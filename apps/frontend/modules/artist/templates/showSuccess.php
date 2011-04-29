<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $artist->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $artist->getName() ?></td>
    </tr>
    <tr>
      <th>Url:</th>
      <td><?php echo $artist->getUrl() ?></td>
    </tr>
    <tr>
      <th>Image:</th>
      <td><?php echo $artist->getImage() ?></td>
    </tr>
    <tr>
      <th>Is activated:</th>
      <td><?php echo $artist->getIsActivated() ?></td>
    </tr>
    <tr>
      <th>Country:</th>
      <td><?php echo $artist->getCountryId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $artist->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $artist->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('artist/edit?id='.$artist->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('artist/index') ?>">List</a>
