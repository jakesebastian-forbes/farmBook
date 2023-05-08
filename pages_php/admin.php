<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
      <!-- <link rel="stylesheet" href="css.css"> -->
      <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
      <script src="https://kit.fontawesome.com/134428d8b1.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://kit.fontawesome.com/82727f4033.css" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'>

        <title> ADMIN || DASHBOARD</title>

  </head>
  <body>
  
  <style>
    body,html{
    line-height:1.8;
    font-family:'Poppins',sans-serif;
    color:#555e58;
    text-transform:capitalize;
    font-weight:400;
    /* background-color: rgb(197, 210, 197); */
    background-color: #e4e4e4;
    margin:0;
    padding:0;
}

.material-icons-outlined {
     vertical-align: middle;
     line-height: 1px;
   }
   
   .text-primary {
     color: #666666;
   }
   
   .text-blue {
     color: #246dec;
   }
   
   .text-red {
     color: #cc3c43;
   }
   
   .text-green {
     color: #367952;
   }
   
   .text-orange {
     color: #f5b74f;
   }
   
   .font-weight-bold {
     font-weight: 600;
   }
   
   h1,h2,h3,h4,h5,h6,.h1,.h3,.h4{
       font-weight:400;
       line-height: 1.5em;
  }
  
  p{
       font-size:15px;
       margin:12px 0 0;
       line-height:24px;
  }
  
  a{
      color:#333;
      font-weight:400;
      
  }
  
  
  button:focus{
      box-shadow:none;
      outline:none;
      border:none;
  }
  
  
  button{
      cursor:pointer;
  }
  
  ul,ol{
      padding:0px;
      margin:0px;
      list-style:none;
  }
  
  a,a:hover,a:focus{
      color:#333;
      text-decoration:none;
      transition:all 0.3s;
  }
  
  /* ---------- HEADER ---------- */
   
  .header {
     grid-area: header;
     height: 70px;
     background-color: white;
     display: flex;
     align-items: center;
     justify-content: space-between;
     padding: 0 30px 0 30px;
     box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
   }
   
   .menu-icon {
     display: none;
     
   }
  
  .wrapper{
    position:relative;
width:100%;
overflow:auto;  
overflow-y: scroll;
  }
  /* ---------- MAIN ---------- */
   
 .main-container {
     grid-area: main;
     overflow-y: auto;
     padding: 20px 20px;
   }
   
   .main-title {
     display: flex;
     justify-content: space-between;
   }
   
   .main-title > p {
     font-size: 20px;
   }
   
   .main-cards {
     display: grid;
     grid-template-columns: 1fr 1fr 1fr 1fr;
     gap: 20px;
     margin: 20px 0;
   }
   
   .card {
     display: flex;
     flex-direction: column;
     justify-content: space-around;
     padding: 25px;
     background-color: #ffffff;
     box-sizing: border-box;
     border: 1px solid #d2d2d3;
     border-radius: 5px;
     box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
   }
   
   .card:first-child {
     border-left: 7px solid #246dec;
   }
   
   .card:nth-child(2) {
     border-left: 7px solid #f5b74f;
   }
   
   .card:nth-child(3) {
     border-left: 7px solid #367952;
   }
   
   .card:nth-child(4) {
     border-left: 7px solid #cc3c43;
   }
   
   .card > span {
     font-size: 20px;
     font-weight: 600;
   }
   
   .card-inner {
     display: flex;
     align-items: center;
     justify-content: space-between;
   }
   
   .card-inner > p {
     font-size: 18px;
   }
   
   .card-inner > span {
     font-size: 35px;
   }
   
   .charts {
     display: grid;
     grid-template-columns: 1fr 1fr;
     gap: 20px;
   }
   
   .charts-card {
     background-color: #ffffff;
     margin-bottom: 20px;
     padding: 25px;
     box-sizing: border-box;
     -webkit-column-break-inside: avoid;
     border: 1px solid #d2d2d3;
     border-radius: 5px;
     box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
   }
   
   .chart-title {
     display: flex;
     align-items: center;
     justify-content: center;
     font-size: 22px;
     font-weight: 600;
   }
   
   
   /* Medium <= 992px */
   @media screen and (max-width: 992px) {
     .grid-container {
       grid-template-columns: 1fr;
       grid-template-rows: 0.2fr 3fr;
       grid-template-areas:
         "header"
         "main";
     }
   
     #sidebar {
       display: none;
     }
   
     .menu-icon {
       display: inline;
     }
   
     .sidebar-title > span {
       display: inline;
     }
   }
    /* Small <= 768px */
    @media screen and (max-width: 768px) {
     .main-cards {
       grid-template-columns: 1fr;
       gap: 10px;
       margin-bottom: 0;
     }
   
     .charts {
       grid-template-columns: 1fr;
       margin-top: 30px;
     }
   }
   
   /* Extra Small <= 576px */
   @media screen and (max-width: 576px) {
     .header-left {
       display: none;
     }
   }

  /*=========sidebar---design------*/
  
  .sidebar{
      position:fixed;
      height:100%!important;
      top:0;
      left:0;
      bottom:0;
      z-index:11;
      width:260px;
      overflow:auto;
      transition:all 0.3s;
      /* background-color:rgb(116, 141, 116); */
      background-color: #57744B;
      box-shadow:0 0 30px 0 rgba(200 200 200 / 20%);
  }
  
  
  @media only screen and (min-width:992px){
      #sidebar.active{
          left:-260px;
          height:100%!important;
          position:absolute!important;
          overflow:visible!important;
          top:0;
          z-index:666;
          float:left!important;
          bottom:0!important;
      }
      
      #content{
          width:calc(100% - 260px);
          position:relative;
          float:right;
          transition:all 0.3s;
      }
      
      #content.active{
          width:100%;
      }
      
  }
  
  
  .sidebar::-webkit-scrollbar{
      width:5px;
      border-radius:10px;
      background-color:#eee;
      display:none;
  }
  
  .sidebar::-webkit-scrollbar-thumbs{
      width:5px;
      border-radius:10px;
      background-color:#333;
      display:none;
  }
  
   .sidebar:hover::-webkit-scrollbar-thumbs{
      display:block;
  }
  
   .sidebar:hover::-webkit-scrollbar{
      display:block;
  }
  
  .sidebar .sidebar-header{
      padding:20px;
      background-color:rgb(79, 101, 79);
      border-bottom:1px solid #eee;
  }
  
  .sidebar-header h3{
      color:white;
      font-size:17px;
      margin:0px;
      text-transform:uppercase;
      transition:all 0.5s ease;
      font-weight:600;
  }
  
   .sidebar-header h3 img{
       width:45px;
       margin-right:10px;
   }
  
  .sidebar ul li{
      padding:2px 0px;
  }
  
   .sidebar ul li.active> a{
       color:#4c7cf3;
       background-color:#DBE5FD;
   }
   
   
   .sidebar ul li.active> a i{
        color:#4c7cf3;
   }
   
   
   
     .sidebar ul li a:hover{
          color:#4c7cf3;
          background-color:#DBE5FD;
     }
   
   
   .dropdown-toggle::after{
       position:absolute;
       right:22px;
       top:18px;
       color:#777777;
   }
   
   .sidebar ul li.dropdown{
       position:sticky;
   }
   
   
     .sidebar ul.component{
         padding:20px 0px;  
     }
   
   .sidebar ul li a{
       padding:5px 10px 5px 20px;
       line-height:30px;
       font-size:15px;
       position:relative;
       font-weight:400;
       display:block;
       color:#777777;
       text-transform:capitalize;
   }
   
      .sidebar ul li a i{
          position:relative;
          margin-right:10px;
          top:6px;
      }
  
  
    /*=========sidebar---design- end-----*/
    
    
     /*========main-content- navbardesign -start-----*/
    
      #content{
          position:relative;
          transition:all 0.5s;
          background-attachment:#f9fafc;
      }
    
    
     .top-navbar{
          width:100%;
          z-index:9;
          position:relative;
          padding:15px 30px;
          background-color:#353b48;
     }
     
     .xd-topbar{
         width:100%;
         position:relative;
     }
     
    .xp-breadcrumbbar .page-title{
        font-size:20px;
        color:#fff;
        margin-bottom:0;
        margin-top:0;
    }
     
     .breadcrumb{
         display:inline-flex;
         background-color:transparent;
         margin:0;
         padding:10px 0 0;
     }
     
     .breadcrumb .breadcrumb-item a{
         color:#777777;
     }
     
     .breadcrumb-item.active{
         color:#6c757d;
     }
      
      
       .breadcrumb-item+.breadcrumb-item{
           padding-left:.5rem;
       }
       
       .main-content{
           padding:30px 30px 0px 30px;
       }
       
       .navbar{
           /* background-color:#353B48; */
           color:#fff;
       }
       
       .navbar-brand{
           color:#fff;
       }
       
       .navbar button{
           background-color:transparent;
           border:none;        
       }
       
        .navbar button span{
            color:#fff;
        }
        
        .xp-menubar{
         border-radius:50%;
       width:45px;
        height:45px;
        line-height:45px;
        text-align:center;
        margin-right:20px;
        border:none;
        color:#fff;
        cursor:pointer;
        background-color:rgba(0,0,0,0.09);     
                }
                
      .xp-menubar span{
        margin:9px;
        padding:0px;
        transform:rotate(90deg);
      }
      
      .navbar-nav > li.active{
          color:#fff;
          border-radius:4px;
          background-color:rgba(0,0,0,0.08);
      }
      .navbar-nav > li > a{
          color:#fff;
      }
      
      @media (max-width:768px){
          .xp-searchbar{
              margin-top:20px;
          }
      }
      
      .navbar-nav > li.show .dropdown-menu{
          transform:translate3d(0,0,0);
          opacity:1;
          display:block;
          visibility:visible;
      }
      
      .dropdown-menu{
          border:0;
          box-shadow:0 2px 5px 0 rgba(0 0 0 / 26%);
          transform:translate3d(0, -20px ,0);
          visibility:hidden;
          position:absolute!important;
          transition:all 150ms linear;
          display:block;
          min-width:15rem;
          right:0;
          left:auto;
          opacity:0;
      }
      
      .small-menu{
          min-width:10rem;
      } 
      
      .dropdown-menu li > a{
          font-size:13px;
          padding:10px 20px;
          margin:0 5px;
          border-radius:2px;
          font-weight:400;
          transition:all 150ms linear;
      }
      
      .dropdown-menu li > a .material-icons{
          position:relative;
          top:3px;
          color:#777;
          margin-right:6px;
          font-size:16px;
          
      }
      
      .navbar-nav > .active > a:focus{
          color:#fff;
          background-color:rgba(0,0,0,0.08);
      }
       .navbar-nav li a{
           position:relative;
           display:block;
           padding:4px 10px!important;
       }
       
      .nav-item .nav-link .material-icons{
          position:relative;
          top:10px;
          font-size:19px;
      }
      
      .xp-user-live{
          position:absolute;
          bottom:5px;
          right:9px;
          width:12px;
          height:12px;
          border-radius:50%;
          /* border:2px solid #353b48; */
          background-color:#4c7cf3;
      }
      
       /*---navbardesign -end-----*/
        
       /*--table design start----*/ 
       
       .table-wrapper {
        background-color: #fff;
        /* padding: 20px 25px; */
        margin:6px 0px 40px 0px;
        width: 100%;
        overflow: auto;
        border-radius: 3px;
        box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
    }
       
       .table-title{
           /* background:#353b48; */
           color:#fff;
           position:sticky;
           top:0;
           width:100%;
           left:0;
           padding:10px 30px;
           border-radius:0px 0px 0 0;
       }
       
       .table-title h2{
           margin:5px 0  0;
           font-size:17px;
       }
        
        table.table tr th, table.table tr td{
            border-color:#e9e9e9;
            padding:10px 15px;
            font-size:14px;
            font-weight: 400;
            vertical-align:middle;
        }
        
        table.table tr th:first-child{
            width:60px;
        }
        
        table.table tr th:last-child{
            width:100px;
        }
        
       table.table-stripped tbody tr:nth-of-type(odd){
           background-color:#fcfcfc;
       }
       
       table.table-stripped.table-hover tbody tr:hover{
           background-color:#f5f5f5;
       }
       
       table.table th i{
           font-size:17px;
           margin: 6px 5px;
           cursor:pointer;
       }
       
       table.table td:last-child{
           opacity:0.9;
           font-size:22px;
           margin:0px 5px;
       }
       
       table.table td a{
           font-weight:bold;
           color:#566787;
           display:inline-block;
           text-decoration:none;
           outline:none!important;
       }
        table.table td a:hover{
            color:#2196F3;
        }
        
        table.table td  i{
            font-size:19px;
        }
        
            table.table .avatar{
              border-radius:50%;
              vertical-align:middle;
              margin-right:10px;
            }
            
            .pagination{
                float:right;
                margin:0 0 5px;
            }
            
            .pagination  li a{
                border:none;
                font-size:13px;
                min-width:30px;
                min-height:30px;
                color:#999;
                margin:0 2px;
                line-height:30px;
                border-radius:2px!important;
                text-align:center;
                padding:0 6px;
            }
            
            .pagination  li a:hover{
                color:#666;
            }
            
            
            .pagination li.disabled i{
                color:#ccc;
                
            }
            
            .pagination li i{
                font-size:16px;
                padding-top:6px;
            }
            
            .hint-text{
                float:left;
                margin-top:10px;
                font-size:13px;
            }
            
            .custom-checkbox{
                position:relative;
            }
            
            .custom-checkbox input[type="checkbox"]{
                opacity:0;
                position:absolute;
                margin:5px 0 0  3px;
                z-index:9;
            }
            
            
            .custom-checkbox label:before{
                width:18px;
                height:18px;
            }
            .custom-checkbox label:before{
                content:"";
                margin-right:10px;
                display:inline-block;
                vertical-align:text-top;
                  background-color:#fff;
                  border:1px solid #bbb;
                  border-radius:2px;
                  box-sizing:border-box;
                  z-index:2;
            }
             
            .custom-checkbox input[type="checkbox"]:checked + label:after{
                content:"";
                position:absolute;
                left:6px;
                top:3px;
                width:6px;
                height:11px;
                border:solid #000;
                border-width:0 3px 3px 0;
                transform:inherit;
                z-index:3;
                transform:rotatez(45deg);
            }
            
                .custom-checkbox input[type="checkbox"]:checked + label:before{
                    border-color:#03A9F4;
                    background:#03A9F4;
                }
            
            
            .custom-checkbox input[type="checkbox"]:checked + label:after{
                border-color:#fff;
            }
            
            .custom-checkbox input[type="checkbox"]:disabled + label:before{
                color:#b8b8b8;
                cursor:auto;
                box-shadow:none;
                background:#ddd;
            }
            
          /*--table design end----*/ 
       
       /*-------modal-style start------*/
        .modal .modal-dialog{
           max-width:400px;
       }
       .modal .modal-header, .modal .modal-body,.modal .modal-footer{
           padding:20px 30px;
       }
       .modal .modal-content{
           border-radius:3px;
       }
       
       .modal .modal-footer{
           background:#ecf0f1;
           border-radius:0 0 3px 3px;
       }
       
       .modal .modal-title{
           display:inline-block;
       }
       
       .modal .form-control{
           border-radius:2px;
           box-shadow:none;
           border-color:#dddddd;
       }
       
        .modal textarea.form-control{
            resize:vertical;
        }
        
          .modal .btn{
              border-radius:2px;
              min-width:100px;
          }
          
          .modal form label{
              font-weight:normal;
          } 
        
           /*-------modal-style end------*/
           
           .sidebar.show-nav, .body-overlay.show-nav{
               transform:translatex(0%);
               opacity:1;
               display:block;
               visibility:visible;
               z-index:15;
           }
      
     /*========main-content- navbardesign -end-----*/
    
    
    @media only screen and (max-width:992px){
        #sidebar{
            position:fixed;
            top:0;
             bottom:0;
             z-index:10;
             width:260px;
             transform:translatex(-100%);
             transition:all 150ms linear;
             box-shadow:none!important;
        }
        
        .body-overlay{
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:100%;
            display:none;
            visibility:hidden;
            opacity:0;
            z-index:3;
            transition:all 150ms linear;
            background-color:rgba(0,0,0,0.5);
        }
    }
    

/* header */

.header {
     grid-area: header;
     height: 70px;
     background-color: white;
     display: flex;
     align-items: center;
     justify-content: space-between;
     padding: 0 30px 0 30px;
     box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
   }
   
   .menu-icon {
     display: none;
     
   }
   
  
  .nav-item .nav-link:hover {
    background-color: #9ab48f;
  }
  .nav-pills .nav-link.active{
    background-color: #9ab48f;
 
   
  }
  
  
/* header */
</style>


		

		     <!-- Sidebar  -->
           
            
             <div class="wrapper"> 
             
                <nav class="navbar navbar-expand-lg navbar-light " >
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#"></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                       <ul class="sidebar text-center">
                            <div class="sidebar-header">
                                <h3><img src="/img/profile pics/profile.jpg" class="img-fluid"/><span>Admin</span></h3>
                            </div>
                
                            <ul class="nav nav-pills text-center"> 
                
                                <li class="nav-item nav_list w-100">
                                    <a class="nav-link link active " id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard" href="#" style="color: white;"><i class="bi bi-card-list fa-2x"></i><span>Dashboard</span></a>
                                </li>
                                <li class="nav-item nav_list w-100">
                                  <a class="nav-link link " id="verification-tab" data-bs-toggle="tab" data-bs-target="#verification" href="#" style="color: white;"><i class="bi bi-calendar2-check fa-2x"></i><span>Verification</span></a>
                                </li>
                                <li class="nav-item nav_list w-100">
                                  <a class="nav-link link" id="logout-tab" data-bs-toggle="tab" data-bs-target="#logout" href="#" style="color: white; margin-top: 190%;"><i class="bi bi-box-arrow-right fa-2x"></i><span> Logout</span></a>
                                </li>
                            </ul> 
                        </ul>
                       
                      </div>
                    </div>
                  </nav>
        

         <!-- main content -->
      
         


		<!--------page-content---------------->
		
		<div id="content">		   
		   <div class="grid-container">
    		<!--------main-content------------->
                <div class="tab-content" id="tabContent" >
            <!-- DASHBOARD TAB -->
            <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab"  style="height: 100%;">
                 <div class="main-container" style="overflow-y: auto;" >
                    <div class="main-title">
                        <p class="font-weight-bold">Welcome, Admin!</p>
                    </div>
            
                    <div class="main-cards">
            
                        <div class="card">
                        <div class="card-inner">
                            <h3 class="text-primary">Pending</h3>
                            <i class="fa-regular fa-clock fa-2x text-primary"></i>
                        </div>
                        <span class="text-primary font-weight-bold">249</span>
                        </div>
            
                        <div class="card">
                        <div class="card-inner">
                            <h3 class="text-primary">Approved</h3>
                            <i class="fa-solid fa-check fa-2x text-primary"></i>
                        </div>
                        <span class="text-primary font-weight-bold">83</span>
                        </div>
            
                        <div class="card">
                        <div class="card-inner">
                            <h3 class="text-primary">Disapproved</h3>
                            <i class="fa-sharp fa-solid fa-xmark fa-2x text-primary"></i>
                        </div>
                        <span class="text-primary font-weight-bold">79</span>
                        </div>
            
                        <div class="card">
                        <div class="card-inner">
                          <h3 class="text-primary">Active Users</h3>
                          <i class="fa-solid fa-user fa-2x text-primary"></i>
                        </div>
                        <span class="text-primary font-weight-bold">56</span>
                        </div>
            
                    </div>
            
                    <div class="charts" >
            
                        <div class="charts-card">
                        <p class="chart-title">Top 5 Products</p>
                        <div id="bar-chart"></div>
                        </div>
            
                        <div class="charts-card">
                        <p class="chart-title">Purchase and Sales Orders</p>
                        <div id="area-chart"></div>
                        </div>
            
                    </div>
                    </main>
                    </div> 
            
                   
                </div>
    

                <!-- VERIFICATION TAB -->
            <div class="tab-pane fade show" id="verification" role="tabpanel" aria-labelledby="verification-tab" >
                <ul class="nav nav-pills  ps-4 mx-4 rounded " style="background-color: #6d8162;">
                    <li class="nav-item nav_list mx-2 my-2">
                        <a class="nav-link link active text-white" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending" href="#" style="color: black;"><i class="bi bi-card-list fa-2x"></i> </i><span> Pending</span></a>
                    </li>
                    <li class="nav-item nav_list mx-2 my-2">
                        <a class="nav-link link text-white" id="approved-tab" data-bs-toggle="tab" data-bs-target="#approved" href="#" style="color: black;"><i class="bi bi-calendar2-check fa-2x"></i><span> Approved</span></a>
                    </li>
                    <li class="nav-item nav_list my-2  mx-2">
                        <a class="nav-link link text-white" id="disapproved-tab" data-bs-toggle="tab" data-bs-target="#disapproved" href="#" style="color: black;"><i class="bi bi-person-x fa-2x"></i><span> Disapproved</span></a>
                    </li>
                </ul> 



                <!-------- VERIFICATION PENDING  ------->
            <div class="tab-content" id="tabContent" >
                    
                    <div class="tab-pane fade show active" id="pending" role="tabpanel" aria-labelledby="pending-tab" >
                        <div class="main-content">
                            <h1 style="color: black;">Pending</h1>
                    <ul class="nav nav-pills">
                                
                    <li class="nav-item nav_list mx-2">
                        <a class="nav-link link active text-dark-gray" id="vendors-tab" data-bs-toggle="tab" data-bs-target="#vendors" href="#" style="color: black; 
                        ">Vendors</a>
                    </li>
                    <li class="nav-item nav_list mx-2">
                    <a class="nav-link link text-dark-gray" id="farmers-tab" data-bs-toggle="tab" data-bs-target="#farmers" href="#" style="color: black;">Farmers</a>
                    </li>
                </ul>

               
                <!-- main content  -->
                
                <div class="tab-content" id="tabContent" >
                <div class="tab-pane fade show active" id="vendors" role="tabpanel" aria-labelledby="vendors-tab">
                    <div class="row">
                        
                        <div class="col-md-12">
                        <div class="table-wrapper">

            <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th>

                    <!-- <span class="custom-checkbox">
                                        <input type="checkbox" id="selectAll">
                                        <label for="selectAll"></label>
                                    </span> -->
                </th>
                <th>Username</th>
                <th style="padding-left: 1%;">Date & Time</th>
                <th style="padding-left: 5%;">Docu1</th>
                <th style="padding-left: 5%;">Docu2</th>
                <th style="padding-left: 5%;">Docu3</th>
                <th style="padding-left: 5%;">Docu4</th>
                <th style="padding-left: 6%;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>
                    <span class="custom-checkbox">
                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                    <label for="checkbox1"></label>
                                    </span>
                </td>
                <td>Benj Samonte</td>
                <td class="text-lowercase">mm/dd/yyyy</td>
                <td><img src = "/img/docu/docu1.jpg" style="width: 150px;height: 100px; object-fit: cover;" ></td>
                <td><img src = "/img/docu/docu1.jpg" style="width: 150px; height: 100px; object-fit: cover;" ></td>
                <td><img src = "/img/docu/docu1.jpg" style="width: 150px; height: 100px; object-fit: cover;" ></td>
                <td><img src = "/img/docu/docu1.jpg" style="width: 150px; height: 100px; object-fit: cover;" ></td>
                <td>
                    <div class="p-0 d-flex justify-content-lg-end justify-content-center">
                    <a href="#approveVendorModal" class="btn btn-success" data-toggle="modal"
                    style="padding: 5px; color: white; font-size: 14px; font-weight: 100; margin-right: 3%;">
                        <i class="material-icons">check</i> <span>Approve</span></a>
                        <a href="#disapproveVendorModal" class="btn btn-danger" data-toggle="modal"
                        style="padding: 5px; color: white; font-size: 14px; font-weight: 100">
                        <i class="material-icons">close</i> <span>Disapprove</span></a>
                </td>
                </tr>
            </tbody>
            </table>
            </div>
            
            </div>
                    </div>
                
                </div>


                <!---------- farmers ----------->
                <div class="tab-pane fade" id="farmers" role="tabpanel" aria-labelledby="farmers-tab">
                    <div class="row">
                        
                        <div class="col-md-12">
                        <div class="table-wrapper">

            <table class="table table-striped table-hover" style="justify-content: space-evenly;">
            <thead>
                <tr>
                <th>
                
                </th>
                <th>Username</th>
                <th style="padding-left: 1%;">Date & Time</th>
                <th style="padding-left: 8%;">Docu1</th>
                <th style="padding-left: 8%;">Docu2</th>
                <th style="padding-left: 6%;">Actions</th>
                </tr>

            </thead>
            <tbody>


                <tr>
                <td>
                    <span class="custom-checkbox">
                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                    <label for="checkbox1"></label>
                                    </span>
                </td>
                <td>Benj Samonte</td>
                <td class="text-lowercase">mm/dd/yyyy</td>
                <td><img src = "/img/docu/docu1.jpg" style="width: 150px; height: 100px; object-fit: cover;" ></td>
                <td><img src = "/img/docu/docu1.jpg" style="width: 150px; height: 100px; object-fit: cover;"></td>
                
                <td>
                    <div class="p-0 d-flex justify-content-lg-end justify-content-center">
                    <a href="#approveVendorModal" class="btn btn-success" data-toggle="modal"
                    style="padding: 5px; color: white; font-size: 14px; font-weight: 100; margin-right: 3%;">
                        <i class="material-icons">check</i> <span>Approve</span></a>
                        <a href="#disapproveVendorModal" class="btn btn-danger" data-toggle="modal"
                        style="padding: 5px; color: white; font-size: 14px; font-weight: 100">
                        <i class="material-icons">close</i> <span>Disapprove</span></a>
                </td>
                </tr>

            </tbody>
            </table>
            </div>
            
            </div>
                    </div>
                </div>
                </div>
                        </div>
                    </div>  



                        <!------- Verification Approved ------>
                    <div class="tab-pane fade" id="approved" role="tabpanel" aria-labelledby="approved-tab" >
                        <div class="main-content">
                            <h1 style="color: black;">Approved</h1>
                    <ul class="nav nav-pills">
                                
                    <li class="nav-item nav_list">
                        <a class="nav-link link active text-dark-gray" id="approved-vendors-tab" data-bs-toggle="tab" data-bs-target="#approved-vendors" href="#" style="color: black;">Vendors</a>
                    </li>
                    <li class="nav-item nav_list">
                    <a class="nav-link link text-dark-gray" id="approved-farmers-tab" data-bs-toggle="tab" data-bs-target="#approved-farmers" href="#" style="color: black;">Farmers</a>
                    </li>
                </ul>

                <!-- main content  -->
                <div class="tab-content" id="tabContent" >
                <div class="tab-pane fade show active" id="approved-vendors" role="tabpanel" aria-labelledby="approved-vendors-tab">
                    <div class="row">
                        
                        <div class="col-md-12">
                        <div class="table-wrapper">

            <table class="table table-striped table-hover">
            <thead>
                <tr>
               <th></th>
                <th>Username</th>
                <th style="padding-left: 1%;">Date & Time</th>
                <th style="padding-left: 5%;">Docu1</th>
                <th style="padding-left: 5%;">Docu2</th>
                <th style="padding-left: 5%;">Docu3</th>
                <th style="padding-left: 5%;">Docu4</th>
                <!-- <th style="padding-left: 6%;">Actions</th> -->
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>
                    <span class="custom-checkbox">
                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                    <label for="checkbox1"></label>
                                    </span>
                </td>
                <td>Benj Samonte</td>
                <td class="text-lowercase">mm/dd/yyyy</td>
                <td><img src = "/img/profile pics/profile2.png" style="width: 150px;height: 100px;object-fit: cover;" ></td>
                <td><img src = "/img/profile pics/profile2.png"style="width: 150px; height: 100px; object-fit: cover" ></td>
                <td><img src = "/img/profile pics/profile2.png" style="width: 150px; height: 100px; object-fit: cover" ></td>
                <td><img src = "/img/profile pics/profile2.png" style="width: 150px; height: 100px; object-fit: cover" ></td>
                <!-- <td>
                    <div class="p-0 d-flex justify-content-lg-end justify-content-center">
                    <a href="#approveVendorModal" class="btn btn-success" data-toggle="modal"
                    style="padding: 5px; color: white; font-size: 14px; font-weight: 100; margin-right: 3%;">
                        <i class="material-icons">check</i> <span>Approve</span></a>
                        <a href="#disapproveVendorModal" class="btn btn-danger" data-toggle="modal"
                        style="padding: 5px; color: white; font-size: 14px; font-weight: 100">
                        <i class="material-icons">close</i> <span>Disapprove</span></a>
                </td> -->
                </tr>
                
            </tbody>
            </table>
            </div>
            
            </div>
                    </div>
                
                </div>


                <!---------- farmers ----------->
                <div class="tab-pane fade" id="approved-farmers" role="tabpanel" aria-labelledby="approved-farmers-tab">
                    <div class="row">
                        
                        <div class="col-md-12">
                        <div class="table-wrapper">

            <table class="table table-striped table-hover justify-content-between" >
            <thead>
                <tr>
                <th>
                
                </th>
                <th>Username</th>
                <th style="padding-left: 1%;">Date & Time</th>
                <th style="padding-left: 5%;">Docu1</th>
                <th style="padding-left: 5%;">Docu2</th>
              
              
                </tr>

            </thead>
            <tbody >


                <tr >
                <td>
                    <span class="custom-checkbox">
                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                    <label for="checkbox1"></label>
                                    </span>
                </td>
                
               
                <td>Benj Samonte</td>
                <td class="text-lowercase">mm/dd/yyyy</td>
                <td ><img src = "/img/profile pics/profile2.png"  style="width: 150px; height: 100px ; object-fit: cover;" ></td>
                <td><img src = "/img/profile pics/profile2.png" style="width: 150px; height: 100px ; object-fit: cover;" ></td>
                <!-- <td><img src = "/img/docu/docu1.jpg" style="width: 150px; ; object-fit: cover;"></td> -->

                <!-- <td>
                    <div class="p-0 d-flex justify-content-lg-end justify-content-center">
                    <a href="#approveVendorModal" class="btn btn-success" 
                    style="padding: 5px; color: white; font-size: 14px; font-weight: 100; margin-right: 3%;">
                    <i class="material-icons">check</i> <span>Approve</span></a>
                    <a href="#disapproveVendorModal" class="btn btn-danger"
                        style="padding: 5px; color: white; font-size: 14px; font-weight: 100">
                        <i class="material-icons">close</i> <span>Disapprove</span></a>
                
                </td> -->
                </tr>
            </tbody>
            </table>
            </div>
     
            </div>
                    </div>
                </div>
                </div>
                        </div>
                    </div> 


                    <!----- VERIFICATION DISAPPROVED -------->
                    <div class="tab-pane fade show " id="disapproved" role="tabpanel" aria-labelledby="disapproved-tab" >
                        <div class="main-content">
                            <h1 style="color: #000;">Disapproved</h1>
                            <ul class="nav nav-pills">
                                
                                <li class="nav-item nav_list">
                                    <a class="nav-link link active text-dark-gray" id="disapproved-vendors-tab" data-bs-toggle="tab" data-bs-target="#disapproved-vendors" href="#" style="color: black;">Vendors</a>
                                </li>
                                <li class="nav-item nav_list">
                                <a class="nav-link link text-dark-gray" id="disapproved-farmers-tab" data-bs-toggle="tab" data-bs-target="#disapproved-farmers" href="#" style="color: black;">Farmers</a>
                                </li>
                            </ul>



                <!-- main content  -->
                


                <div class="tab-content" id="tabContent" >
                    <div class="tab-pane fade show active" id="disapproved-vendors" role="tabpanel" aria-labelledby="disapproved-vendors-tab">
                        <div class="row">
                            
                            <div class="col-md-12">
                            <div class="table-wrapper">
    
                <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>Username</th>
                        <th style="padding-left: 1%;">Date & Time</th>
                        <th style="padding-left: 5%;">Docu1</th>
                        <th style="padding-left: 5%;">Docu2</th>
                        <th style="padding-left: 5%;">Docu3</th>
                        <th style="padding-left: 5%;">Docu4</th>
                    <!-- <th style="padding-left: 6%;">Actions</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>
                        <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                        <label for="checkbox1"></label>
                                        </span>
                    </td>
                    <td>Benj Samonte</td>
                    <td class="text-lowercase">mm/dd/yyyy</td>
                    <td><img src = "/img/docu/docu1.jpg" style="width: 150px; height: 100px;" ></td>
                    <td><img src = "/img/docu/docu1.jpg" style="width: 150px; height: 100px;" ></td>
                    <td><img src = "/img/docu/docu1.jpg" style="width: 150px; height: 100px;" ></td>
                    <td><img src = "/img/docu/docu1.jpg" style="width: 150px; height: 100px;" ></td>
                    <!-- <td>
                        <div class="p-0 d-flex justify-content-lg-end justify-content-center">
                        <a href="#approveVendorModal" class="btn btn-success" data-toggle="modal"
                        style="padding: 5px; color: white; font-size: 14px; font-weight: 100; margin-right: 3%;">
                            <i class="material-icons">check</i> <span>Approve</span></a>
                            <a href="#disapproveVendorModal" class="btn btn-danger" data-toggle="modal"
                            style="padding: 5px; color: white; font-size: 14px; font-weight: 100">
                            <i class="material-icons">close</i> <span>Disapprove</span></a>
                    </td> -->
                    </tr>
                 
                </tbody>
                </table>
                </div>
                
                </div>
                        </div>
                    
                    </div>
    
    
                    <!---------- farmers ----------->
                    <div class="tab-pane fade" id="disapproved-farmers" role="tabpanel" aria-labelledby="disapproved-farmers-tab">
                        <div class="row">
                            
                            <div class="col-md-12">
                            <div class="table-wrapper">
    
                <table class="table table-striped table-hover" style="justify-content: space-evenly;">
                <thead>
                    <tr>
                        <th></th>
                        <th>Username</th>
                        <th style="padding-left: 1%;">Date & Time</th>
                        <th style="padding-left: 5%;">Docu1</th>
                        <th style="padding-left: 5%;">Docu2</th>
                      
                    </tr>
    
                </thead>
                <tbody>
    
    
                    <tr>
                    <td>
                        <span class="custom-checkbox">
                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                        <label for="checkbox1"></label>
                                        </span>
                    </td>
                    <td>Benj Samonte</td>
                    <td class="text-lowercase">mm/dd/yyyy</td>
                    <td><img src = "/img/profile pics/profile2.png" style="width: 150px; height: 100px ; object-fit: cover;" ></td>
                    <td><img src = "/img/profile pics/profile2.png" style="width: 150px; height: 100px ; object-fit: cover;"></td>
                    
                    <!-- <td>
                        <div class="p-0 d-flex justify-content-lg-end justify-content-center">
                        <a href="#approveVendorModal" class="btn btn-success" data-toggle="modal"
                        style="padding: 5px; color: white; font-size: 14px; font-weight: 100; margin-right: 3%;">
                            <i class="material-icons">check</i> <span>Approve</span></a>
                            <a href="#disapproveVendorModal" class="btn btn-danger" data-toggle="modal"
                            style="padding: 5px; color: white; font-size: 14px; font-weight: 100">
                            <i class="material-icons">close</i> <span>Disapprove</span></a>
                    </td> -->
                    </tr>

                </tbody>
                </table>
                </div>
         
                </div>
                        </div>
                    </div>
                    </div>
                    </div> 
                </div>
            </div>
            </div>
                </div>
            </div>
        </div> 
</div>
            
                     
               <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
   

                     
                      <!-- End Sidebar -->
                    <!-- Scripts -->
                    <!-- ApexCharts -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
                    <!-- Custom JS -->
                    <script src="js/scripts.js"></script>
         
        <script>
        var barChartOptions = {
          series: [{
            data: [10, 8, 6, 4, 2]
          }],
          chart: {
            type: 'bar',
            height: 350,
            toolbar: {
              show: false
            },
          },
          colors: [
            "#246dec",
            "#cc3c43",
            "#367952",
            "#f5b74f",
            "#4f35a1"
          ],
          plotOptions: {
            bar: {
              distributed: true,
              borderRadius: 4,
              horizontal: false,
              columnWidth: '40%',
            }
          },
          dataLabels: {
            enabled: false
          },
          legend: {
            show: false
          },
          xaxis: {
            categories: ["Rice", "Onion", "Watermelon", "Corn", "Carrot"],
          },
          yaxis: {
            title: {
              text: "Count"
            }
          }
        };
        
        var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
        barChart.render();
        
        
        // AREA CHART
        var areaChartOptions = {
          series: [{
            name: 'Purchase Orders',
            data: [31, 40, 28, 51, 42, 109, 100]
          }, {
            name: 'Sales Orders',
            data: [11, 32, 45, 32, 34, 52, 41]
          }],
          chart: {
            height: 350,
            type: 'area',
            toolbar: {
              show: false,
            },
          },
          colors: ["#4f35a1", "#246dec"],
          dataLabels: {
            enabled: false,
          },
          stroke: {
            curve: 'smooth'
          },
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
          markers: {
            size: 0
          },
          yaxis: [
            {
              title: {
                text: 'Purchase Orders',
              },
            },
            {
              opposite: true,
              title: {
                text: 'Sales Orders',
              },
            },
          ],
          tooltip: {
            shared: true,
            intersect: false,
          }
        };
        
        var areaChart = new ApexCharts(document.querySelector("#area-chart"), areaChartOptions);
        areaChart.render();
        
        
        </script>



 <script
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous">
</script>
        
         <!-- ApexCharts -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
         <!-- Custom JS -->
    <script src="js/scripts.js"></script>
         
         <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
                        
         <!-- Material Icons -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        
     <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>
 </body>
 </html>  