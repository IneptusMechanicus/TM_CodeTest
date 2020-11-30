<div class="left-col"></div>
<div class="mid-col">
  <h1> Enter your author query </h1>
  <form id="queryForm" method="post">
    <input type="text" id="query" name="searchQuery"></input>
  </form>
  <?php
    if (isset($_POST["searchQuery"])) {
      $_POST["searchResult"] = $this->searchAuthors($_POST["searchQuery"]);
  }
  ?>
  <div id="contentSection">
    <script type="text/javascript">
      var queryResult = <?php echo json_encode((isset($_POST["searchResult"]))?$_POST["searchResult"]:null)?>;
    </script>
    <script type="text/javascript" src="js/processQuery.js"></script>
  </div>
</div>
<div class="right-col"></div>
