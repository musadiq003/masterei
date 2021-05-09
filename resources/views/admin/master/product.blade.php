@include('admin/header')
                 <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">master</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">master</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                               <a href='{{url("/add/master")}}'>
                                                 <input style="margin-top: 5px" type="submit" class="btn btn-secondary" name='submit_image' value="Add master"/>
                                                 </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Image</th>
                                                <th>Text1</th>
                                                <th>Text2</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php
                                                    $x = 1;;
                                                        ?>
                                            @foreach($master as $masters)
                                            <tr>
                                                <td>
                                                    <?php
                                                    echo $x;
                                                    $x++;
                                                        ?>
                                                </td>
                                                <td>
                                                    <a href='{{url("/admin/master/product/{$masters->id}")}}'>
                                                    <img style="width: 100px" src='{{url("images/$masters->img")}}'>
                                                </a>
                                                </td>
                                                <td>{{$masters->text1}}</td>
                                                <td>{{$masters->text2}}</td>
                                                <td>
                                                    <a href='{{url("admin/update/master/{$masters->id}")}}'>
                                                        
                                                 <input style="margin-top: 5px" type="submit" class="btn btn-primary" name='submit_image' value="Update"/>
                                                    </a>

                                                      <a href='{{url("/admin/add/mpic/{$masters->id}")}}'>
                                                        
                                                 <input style="margin-top: 5px" type="submit" class="btn btn-primary" name='submit_image' value="Add Pictures"/>
                                                    </a>
                                                       <a href='{{url("/delete/mic/{$masters->id}")}}'>
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