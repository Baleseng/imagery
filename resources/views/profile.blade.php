@extends('layouts.app')

@section('description', '')
@section('keywords', '')

@section('title',  '')


@section('content')

<div class="mt-5 border bg-black bg-gradient container-fluid">
    @include('includes.users.file-search-field')
</div>

<div class="container md-auto position-relative">
    
    <!-- Main Section -->
    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12 bg-light mt-lg-0 mt-3 mx-auto">
      <div class="row">
        <div class="col-xl-2 shadow-sm border-0 rounded-0">
          <h6>My Account</h6> 

          <ul class="list-group list-group-flush">
            <li class="list-group-item list-group-item-action">
              <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50 col-12">
                <i class="fa-solid fa-user mx-2"></i> Profile</a>
            </li>
            <li class="list-group-item list-group-item-action">
              <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">
                <i class="fa-solid fa-file-lines mx-2"></i> Plan</a>
            </li>
            <li class="list-group-item list-group-item-action">
              <a href="" class="link-offset-2 link-underline link-underline-opacity-0 text-black-50">
                <i class="fa-solid fa-money-bill-wave mx-2"></i> Purchase History</a>
            </li>
          </ul>
          

        </div>
        <div class="col-xl-10">
          
          <h2>Profile</h2>
          <h5>User details</h6> 

          <table class="table table-striped">
            <tbody>
              <tr>
                <th scope="row">User Id</th>
                <td>000000</td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">Name</th>
                <td>Stephen Mokgosi</td>
                <td>Edit</td>
              </tr>
              <tr>
                <th scope="row">Password</th>
                <td>........</td>
                <td>Edit</td>
              </tr>
              <tr>
                <th scope="row">Email</th>
                <td>baleseng33@outlook.com</td>
                <td>Edit</td>
              </tr>
            </tbody>
          </table>

          <h6>Upload Profile Picture</h6> 
          <h6>Create / Manage Page</h6> 
          
          <h2>Personal Config</h2>
          <table class="table table-striped">
            <tbody>
              <tr>
                <th scope="row">Security / Privacy</th>
                <td>
                  <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                  </label>
                </td>
              </tr>
              <tr>
                <th scope="row">Setting A.I</th>
                <td><label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                  </label></td>
              </tr>
              <tr>
                <th scope="row">Setting Notification</th>
                <td>
                  <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                  </label>
                </td>
              </tr>
              <tr>
                <th scope="row">Setting Requests</th>
                <td>
                  <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                  </label>
                </td>
              </tr>

            </tbody>
          </table> 
          <h2>Site Config</h2>
          <h6>Language Preference</h6>
          <h6>Display Preference</h6>
          <h6>Cookie Preference</h6>
          <h6>Sitemap</h6>
          <h6>Feedback</h6>
          <h6>Help</h6>

        </div>
      </div>
    </div>

</div>

@endsection

