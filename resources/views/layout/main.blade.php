<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous">
    <title>Aplikasi | {{ $title }}</title>
  </head>
  <body>
    <style>
      .search-box {
    display: flex;
    justify-content: flex-end;
    margin-bottom: 15px;
  } 
  .search-box input {
    padding: 10px;
    border: 1px solid #000000;
    border-radius: 5px;
    width: 300px;
    font-size: 16px;
    outline: none;
  }

  .search-box input::placeholder {
    color: #aaa;
  }
    </style>

    @include('partials/sidebar')
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
      document.getElementById('searchInput').addEventListener('input', function() {
        const input = this.value.toLowerCase();
        const rows = document.querySelectorAll('.details');
    
        rows.forEach(row => {
          const rowData = row.textContent.toLowerCase();
          if (rowData.includes(input)) {
            row.style.display = '';
          } else {
            row.style.display = 'none';
          }
        });
      });
    </script>
  </body>
</html>