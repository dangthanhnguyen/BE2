<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('meta');
    <!-- Styles -->
    @include('style');

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>


<body class="antialiased">
    @include('header');
    
    <div class="container">

        <table class="table">

            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Web</th>
                    <th scope="col">Address</th>
                    <th scope="col">Code</th>
                    <th scope="col">Phone</th>
                    <th scope="col">CategoryID</th>
                    <th scope="col">Trainer Name</th>
                    <th scope="col">Category Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($companies as $item):
                <tr>
                    <th scope="row"><?php echo $item->company_id ?></th>
                    <td><?php echo $item->company_name ?></td>
                    <td><?php echo $item->company_web ?></td>
                    <td><?php echo $item->company_address ?></td>
                    <td><?php echo $item->company_code ?></td>
                    <td><?php echo $item->company_phone ?></td>
                    <td><?php echo $item->category_id ?></td>
                    <td><?php echo $item->trainersCompanies['trainer_name'] ?></td>
                    <td>
                        @foreach($item->companiesCategory as $category)
                            <?php echo $category['category_name'] ?>
                        @endforeach
                    </td>
                </tr>
                @endforeach

            </tbody>

        </table>

        <?php echo $companies->links() ?>

    </div>

    @include('footer');
    


    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
        Holder.addTheme('thumb', {
            bg: '#55595c',
            fg: '#eceeef',
            text: 'Thumbnail'
        });
    </script>



</body>

</html>