<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>



    @include("admin.admincss")

</head>

<body>

    <div class="container-scroller">
        @include("admin.navbar")


        <div style="position: relative; top:60px; right: -150px ">



<form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data">

        @csrf

        <div>

            <label>Name</label>
            <input style="color:blue" type="text" name="name" required="" placeholder="Enter name">
        </div>

        <div>

            <label>Speciality</label>
            <input style="color:blue" type="text" name="speciality" required="" placeholder="Enter speciality">
        </div>

        <div>

            
            <input type="file" name="image" required="">
        </div>

        <div>

            
            <input style="color:blue" type="submit" value="Save">
        </div>




   </form>

   
   </div>

</div>

@include("admin.adminscript")
