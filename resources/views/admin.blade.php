<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />   

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <title>Admin Dashboard</title>
</head>

<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <img class="logo-size" src="img/logo.png" alt="Logo">
        </div>
        
        <div class="side-content">
            <div class="profile">
                <h4>Admin</h4>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="" class="active">
                            <span class="las la-home"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <span class="las la-user-alt"></span>
                            <small>Profile</small>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <span class="las la-envelope"></span>
                            <small>Mailbox</small>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <span class="las la-tasks"></span>
                            <small>Tasks</small>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                
                <div class="header-menu">
                    
                    <div class="notify-icon">
                        <span class="las la-envelope"></span>
                        <span class="notify">4</span>
                    </div>
                    
                    <div class="notify-icon">
                        <span class="las la-bell"></span>
                        <span class="notify">3</span>
                    </div>
                    
                    <div class="user">
                        <div>
                            <span class="fa-solid fa-right-from-bracket"></span>
                            <span>Logout</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
            <div class="page-header">
                <h1>Dashboard</h1>
                <small>Home / Dashboard</small>
            </div>
            
            <div class="page-content">
            
                <div class="analytics">
                    <div class="card">
                        <div class="card-head">
                            <h2>56 Orang</h2>
                            <span class="fa-solid fa-users"></span>
                        </div>
                        
                        <div class="card-progress">
                            <small>Total Pasien</small>
                            <div class="card-indicator">
                                <div class="indicator one" style="width: 56%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>3 Orang</h2>
                            <span class="fa-solid fa-user-doctor" style="width: 25%"></span>
                        </div>
                        <div class="card-progress">
                            <small>Total Dokter</small>
                            <div class="card-indicator">
                                <div class="indicator two" style="width: 30%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>56 Pcs</h2>
                            <span class="fa-solid fa-tablets"></span>
                        </div>
                        <div class="card-progress">
                            <small>Total Obat</small>
                            <div class="card-indicator">
                                <div class="indicator three" style="width: 56%"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="records table-responsive">
                    <div class="record-header" style="padding-bottom: 0;">
                        <h2>Tabel Pasien</h2>
                    </div>

                    <div class="record-header"> 
                        <div class="add">
                            <span>Entries</span>
                            <select name="" id="">
                                <option value="">No</option>
                            </select>
                        </div>

                        <div class="browse">
                           <input type="search" placeholder="Search" class="record-search">
                            <select name="" id="">
                                <option value="">Status</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th><span class="las la-sort"></span> Nama</th>
                                    <th><span class="las la-sort"></span> Umur</th>
                                    <th><span class="las la-sort"></span> Jenis Kelamin</th>
                                    <th><span class="las la-sort"></span> Kondisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="client">
                                            <div class="client-info">
                                                <h4>Andrew</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        21
                                    </td>
                                    <td>
                                        Pria
                                    </td>
                                    <td>
                                        <span class="paid"> Dirawat</span>
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="client">
                                            <div class="client-info">
                                                <h4>Esty</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        21
                                    </td>
                                    <td>
                                        Wanita
                                    </td>
                                    <td>
                                        <span class="paid"> Sembuh</span>
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="client">
                                            <div class="client-info">
                                                <h4>Fiqe</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        7
                                    </td>
                                    <td>
                                        Wanita
                                    </td>
                                    <td>
                                        <span class="paid">Dirawat</span>
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="client">
                                            <div class="client-info">
                                                <h4>Bruno</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        18
                                    </td>
                                    <td>
                                        Pria
                                    </td>
                                    <td>
                                        <span class="paid">Dirawat</span>
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <div class="client">
                                            <div class="client-info">
                                                <h4>Enta</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        22
                                    </td>
                                    <td>
                                        Pria
                                    </td>
                                    <td>
                                        <span class="paid">Sembuh</span>
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>

                </div>
            
            </div>
            
        </main>
        
    </div>
</body>
</html>