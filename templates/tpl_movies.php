<?php include_once(__DIR__.'../../database/db_movies.php');?>

<?php function select_movies() {
$movies=getAllMovies();?>
<?php foreach($movies as $movie){?>
   <option value="<?php echo $movie['Name']; ?>"><?php echo $movie['Name']; ?></option>
   <?php }?>
<?php }?>