<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$search->nameproduct}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{url('css/products/all.min.css')}}">
    <link rel="stylesheet" href="{{url('css/products/car.css')}}">
    <style>
         *{
         padding: 0;
          margin: 0;
          background-color: black;
          }
         header{
           width: 80%;
           height:20vh ;
           display: flex;
           justify-content: space-around;
           align-items: center;
           margin-left:10% ;
           } 
           header .icon a{
           text-decoration: none;
            }
            header .icon a i{
            color: white;
            margin-left:4px ;
             font-size:20px ;
             }
             header .icon a i:hover{
             color: crimson;
             }
             header #search input{
             width:500px ;
             height:50px ;
             background-color: white;
             border-radius:50px ;
             text-align: right;
             padding-right:10px ;
             font-size:20px ;
             }

              .product{
              margin-top:3% ;
              width:100%;
              height:63vh ;
              color: white;
               }
               .product .contain img{
               width: 600px;
               }
               .contain .img{
                padding-right: 300px;
                padding-left: -700px;
                margin-right:100px ;
                margin-left:200px;
                  }

              .contain{
               width:100% ;
               height:60vh ;
               justify-content:space-around;
               display: flex;
               margin-left: -100px;
    
                }
                .contain .dt1{
                  margin-left: -700px;
                }
               .contain .info1{
               padding-left:10px ;
               margin-right:20px;
               margin-left: -300px;
              
               }
               .contain .info1 p{ 
               font-size:26px ;
               margin-left:15px ;
               }
               .contain .info1 span{ 
               font-size:26px ;
               padding:6px 30px ;
               background-color:#373565;
               border-radius:20px ;
               }
               .contain .info1 a{
               text-decoration: none;
               color: white;
               background-color:#373565;
               font-size:26px ;
               padding:5px 30px ;
               border-radius:25px ;
               display: inline-block;   
               margin-top:15px ;
               }
               .contain .info2{
               margin-left:10px ;
               padding-right:-300px;
               padding-left: 10px;
               }
               .contain .info2 a{
                text-decoration: none;
                color: white;
               background-color:#9E9C98;
               font-size:26px ;
               padding:5px 30px ;
               border-radius:25px ;
               display: inline-block;   
               }
               .contain .info2 p{
                 margin-left:50px ;
                 margin-top:10px ;
                 font-size:20px ;
                 }
               .detals{
               width: 80%;
               height:60vh ;
               color: white;
               display: flex;
               margin-left:200px ;
               margin-right: 100px;
               padding-right: 100px;
               justify-content: space-between;
               }
               .detals .right{
               height:300px ;
               text-align: right;
                font-weight: 300;
               position: relative;
                bottom: 300px;
               }
               .detals h3{
                font-size:30px ;
               justify-content: right;
                margin-top:25px ;
                word-spacing:3px ;
               font-weight: 400;
                }
               .right input{
               background-color: #9E9C98;
               height:30px ;
                margin-right:20px ;
                font-size:30px ;
               width:140px ;
               color:white;
               border: none;
                }
               .detals .left{
                text-align: center;
                padding-top:70px ;
               padding-left:50px ;
                position: relative;
               left:75% ;
                }
               .left h2{
                font-size:40px ;
               margin-top:25px ;
               word-spacing:3px ;
               font-weight: 300;
                }
               .left img{
                width:300px ;
               margin-top:30px ;
                }      
       
     </style>
</head>
<body>
    <header>
        <div class="icon">
          <a href="{{route('edit.user')}}">
            <i class="fa-regular fa-user"></i>
          </a>
          <a href="{{route('favorite.page')}}">
            <i class="fa-regular fa-heart"></i>
          </a>
          <a href="#">
            <i class="fa-regular fa-bell"></i>
          </a>
          <a href="{{route('home.page')}}">
            <i class="fa fa-thin fa-house"></i>
          </a>
          <a href="">
            <i class="fa-solid fa-circle-plus" ></i>
          </a>
        </div>
    
        <div id="search">
          <form>
            <input class="search1" type="text" name="text" placeholder="بحث">
          </form>
        </div>
        
        <div class="logo">
          <img src="{{url('/images/products/logo.jpeg')}}" alt="logo" width="420" height="400px">
        </div>
      </header>

      <section class="product">
        <div class="contain">
          <div class="img">
            <img src="{{url('/images/products/'.$search-> photo_product)}}" alt="">
          </div>

          <div class="dtl">
            <div class="proinfo" style="display: flex;justify-content: space-between;">
              <div class="info1">
                  <div style="display: flex;align-items: center;"> <span>{{$search->start_price}}</span> <p>يبدأ من</p></div>
    
                    <a href="{{route('bidding.page')}}">مزايدة</a>
              </div>

              <div class="info2" >
                  <a href="{{route('category.page')}}">{{$search->category_product}}</a>
                  <p>({{$search->description}})</p>

              </div>

          </div>
            

          </div>

           

        </div>

        <div class="detals">
          <div class="left">
          <h2>:طريقة الدفع</h2>
            <a href="{{route('payment.method.page')}}"><img src="{{url('/images/products/visa-removebg-preview (1).png')}}" alt=""></a>
  
          </div>
  
          <div class="right">
            <h3>يبدأ من :{{$search->start_price}}</h3>
            <h3>أعلى مزايدة:{{$search->high_price}}</h3>
            <h3><input type="text" value="{{$search->my_bidding}}">:مزايدتى</h3>
            <h3>عدد المتزايدين:{{$search->count_bidder}}</h3>
            <h3>تاريخ الانتهاء:{{$search->expiry_date}}</h3>
  
          </div>
  
        </div>

      </section><!-- product -->



    

    
</body>
</html>