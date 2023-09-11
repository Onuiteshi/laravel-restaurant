<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.admin-css')
</head>
<body>
<div class="container-scroller">
    @include("admin.navbar")
    <div style="position:relative;top:60px;right:-150px">
        <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data">

            @csrf
            <div>
                <label>Title</label>
                <label>
                    <input style="color: black" type="text" name="title" placeholder="Write a Title" required>
                </label>
            </div>

            <div>
                <label>Price</label>
                <label>
                    <input style="color: black" type="number" name="price" placeholder="Price" required>
                </label>
            </div>

            <div>
                <label>Image</label>
                <label>
                    <input style="color: white" type="file" name="image" placeholder="Upload Image" required>
                </label>
            </div>

            <div>
                <label>Description</label>
                <label>
                    <textarea style="color: black" name="description" placeholder="Description" required cols="30" rows="10"></textarea>
                </label>
            </div>

            <div>

                <input type="submit" value="Save">
            </div>
        </form>

        <table style="border-collapse: collapse; width: 70%;margin-top: 100px">
            <thead>
            <tr style="background-color: gold;">
                <th style="border: 1px solid #ddd; padding: 8px;">Food Name</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Price</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Description</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Image</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $dataa)
                <tr>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{$dataa->title}}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">${{$dataa->price}}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{$dataa->description}}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;"><img style="height: 100%; width: 100px" src="/foodimage/{{$dataa->image}}" alt="{{$dataa->image}}"> </td>
                    <td style="border: 1px solid #ddd; padding: 8px;"><a href="">Edit</a> | <a href="{{ url('/deletemenu',$dataa->id)}}"> Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



</div>
@include('admin.admin-script')
</body>
</html>
