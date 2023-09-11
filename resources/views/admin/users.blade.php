<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.admin-css')
</head>
<body>
<div class="container-scroller">
    @include("admin.navbar")
    <table style="border-collapse: collapse; width: 70%;">
        <thead>
        <tr style="background-color: gold;">
            <th style="border: 1px solid #ddd; padding: 8px;">Name</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Email</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $dataa)
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">{{$dataa->name}}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{$dataa->email}}</td>
                @if($dataa->userType =="0")
                    <td style="border: 1px solid #ddd; padding: 8px;"><a href="">Edit</a> | <a href="{{ url('/delete',$dataa->id)}}"> Delete</a></td>
                @else <td style="border: 1px solid #ddd; padding: 8px;"></td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@include('admin.admin-script')
</body>
</html>
