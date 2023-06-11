
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="http://exprostudio.com/html/book_library/css/style.css">
  <link rel="stylesheet" type="text/css" href="http://exprostudio.com/html/book_library/css/book.css">

<style type="text/css">
.book-section {
  background-color: #f5f5f5;
  padding: 50px 0;
}

.section-title {
  text-align: center;
  margin-bottom: 30px;
}

.book-item {
  text-align: center;
  margin-bottom: 30px;
}

.book-title {
  font-size: 20px;
  font-weight: bold;
  margin-top: 10px;
  margin-bottom: 5px;
}

.book-author {
  font-size: 14px;
  color: #888;
}

.book-item {
  text-align: center;
  margin-bottom: 30px;
  transition: transform 0.3s ease;
}

.book-item.hovered {
  transform: scale(1.05);
}

.book-item.selected {
  background-color: #ffc107;
  color: #fff;
}
</style>



<?php include 'includes/session.php'; ?>
<?php 
  include 'includes/timezone.php'; 
  $today = date('Y-m-d');
  $year = date('Y');
  if(isset($_GET['year'])){
    $year = $_GET['year'];
  }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Matura Shteterore
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Matura Shteterore</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <h3>Anglisht</h3>
              <?php
                $sql = "SELECT * FROM books";
                $query = $conn->query($sql);

                echo "<h4>".$query->num_rows." libra</h4>";
              ?>   
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="matura_anglisht.php" class="small-box-footer"> Hap Materialet <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <h3>Gjuhe & Letersi</h3>
              <?php
                $sql = "SELECT * FROM books";
                $query = $conn->query($sql);

                echo "<h4>".$query->num_rows." libra</h4>";
              ?>
          
            
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="matura_letersi.php" class="small-box-footer"> Hap Materialet <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <h3>Matematike</h3>
              <?php
                $sql = "SELECT * FROM books";
                $query = $conn->query($sql);

                echo "<h4>".$query->num_rows." libra</h4>";
              ?>
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="matura_matematike.php" class="small-box-footer"> Hap Materialet <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
            <h3>Lende Zgjedhje</h3>
              <?php
                $sql = "SELECT * FROM books";
                $query = $conn->query($sql);

                echo "<h4>".$query->num_rows." libra</h4>";
              ?>
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="borrow.php" class="small-box-footer"> Hap Materialet <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <section class="book-section">
        <script>
          $(document).ready(function() {
  // Add hover effect to book items
  $('.book-item').hover(
    function() {
      $(this).addClass('hovered');
    },
    function() {
      $(this).removeClass('hovered');
    }
  );

  // Add click event to book items
  $('.book-item').click(function() {
    $(this).toggleClass('selected');
  });
});

</script>

  <div class="container">
    <h2 class="section-title">Some Great Books Picked By Authors</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="book-item">
          <img src="../images/9.jpg" alt="Book 1">
          <h3 class="book-title">Book 1 Title</h3>
          <p class="book-author">Author Name</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="book-item">
          <img src="path/to/book2.jpg" alt="Book 2">
          <h3 class="book-title">Book 2 Title</h3>
          <p class="book-author">Author Name</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="book-item">
          <img src="path/to/book3.jpg" alt="Book 3">
          <h3 class="book-title">Book 3 Title</h3>
          <p class="book-author">Author Name</p>
        </div>
      </div>
    </div>
  </div>
</section>

      </section>
      <!-- right col -->
    </div>
  	<?php include 'includes/footer.php'; ?>

</div>
<!-- ./wrapper -->

</script>

</body>
</html>
