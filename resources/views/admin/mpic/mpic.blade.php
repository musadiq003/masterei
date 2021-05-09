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
                                                <th>Amp</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php
                                                    $x = 1;;
                                                        ?>
                                            @foreach($mpic as $mpic)
                                            <tr>
                                                <td>
                                                    <?php
                                                    echo $x;
                                                    $x++;
                                                        ?>
                                                </td>
                                                <td><img style="width: 100px" src='{{url("images/$mpic->img")}}'></td>
                                                <td>{{$mpic->text1}}</td>
                                                <td>{{$mpic->text2}}</td>
                                                <td>{{$mpic->am}}</td>
                                                <td>
                                                    <a href='{{url("admin/update/mpic/{$mpic->id}")}}'>
                                                        
                                                 <input style="margin-top: 5px" type="submit" class="btn btn-primary" name='submit_image' value="Update"/>
                                                    </a>
                                                       <a href='{{url("/delete/mpic/{$mpic->id}")}}'>
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