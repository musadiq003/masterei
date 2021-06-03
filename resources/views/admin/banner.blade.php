@include('admin/header')
                 <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Banner</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Banner</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                               <a href='{{url("/add/banner")}}'>
                                                 <input style="margin-top: 5px" type="submit" class="btn btn-secondary" name='submit_image' value="Add Banner"/>
                                                 </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Image</th>
                                                <th>Text</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php
                                                    $x = 1;;
                                                        ?>
                                            @foreach($banner as $banners)
                                            <tr>
                                                <td>
                                                    <?php
                                                    echo $x;
                                                    $x++;
                                                        ?>
                                                </td>
                                                <td><img style="width: 100px" src='{{url("public/images/$banners->img")}}'></td>
                                                <td>{{$banners->text}}</td>
                                                <td>
                                                    <a href='{{url("admin/update/banner/{$banners->id}")}}'>
                                                        
                                                 <input style="margin-top: 5px" type="submit" class="btn btn-primary" name='submit_image' value="Update"/>
                                                    </a>
                                                       <a href='{{url("/delete/banner/{$banners->id}")}}'>
                                                 <input style="margin-top: 5px" type="submit" class="btn btn-danger" name='submit_image' value="Delete"/>
                                                 </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                
@include('admin/footer')