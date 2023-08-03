<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{!! asset('/css/style2.css') !!}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Aplikasi | {{ $title }}</title>
  </head>
  <body>
<style>
  .btn-icon {
      border: none;
      background-color: transparent;
      padding: 5px;
      cursor: pointer;
      border-radius: 10%;
      background-color: #007bff;
      text-align: center; 
    }

    .btn-icon:hover {
      background-color: #ffc107; 
    }

    .btn-icon i {
      font-size: 20px;
      color: #ffffff;
    }
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

  .sales-details {
    overflow: auto scroll; /* Tambahkan scroll jika ada banyak data */
  }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  th, td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ddd;
  }

  th {
    background-color: #f2f2f2;
  }
</style>
    @include('partials/sidebar2')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
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