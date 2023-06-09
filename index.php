<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body style="background-color: #f1f1f1; color: #333; font-family: Arial, sans-serif;">

    <?php
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];

    $selectedVote = $_GET['votes'] ?? 'all';
    $filteredHotels = [];

    if ($selectedVote !== 'all') {
        foreach ($hotels as $albergo) {
            if ($albergo['vote'] == $selectedVote) {
                $filteredHotels[] = $albergo;
            }
        }
    } else {
        $filteredHotels = $hotels;
    }
    ?>

    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center py-5">
                <div class="col-12 col-lg-9 col-md-8">
                    <div class="container px-0 mb-5 d-flex align-items-baseline justify-content-between">
                        <div class="container px-0">
                            <h1>
                                PHP Hotels
                            </h1>
                        </div>
                        <div class="container px-0">
                            <form method="GET" action="">
                                <select name="votes" class="form-select" onchange="this.form.submit()">
                                    <option value="#" select disabled>Search from votes</option>
                                    <option value="all">All</option>
                                    <option value="1">1 star</option>
                                    <option value="2">2 stars</option>
                                    <option value="3">3 stars</option>
                                    <option value="4">4 stars</option>
                                    <option value="5">5 stars</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Descrizione</th>
                                <th scope="col">Parking</th>
                                <th scope="col">Vote</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($filteredHotels as $albergo) { ?>
                                <tr>
                                    <td><?php echo $albergo['name']; ?></td>
                                    <td><?php echo $albergo['description']; ?></td>
                                    <td><?php echo ($albergo['parking'] ? 'Yes' : 'No'); ?></td>
                                    <td>
                                        <?php
                                        $stars = '';
                                        $vote = $albergo['vote'];

                                        for ($i = 0; $i < $vote; $i++) {
                                            $stars .= '<i class="fas fa-star"></i>';
                                        }

                                        echo $stars;
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>