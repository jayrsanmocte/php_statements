    <!DOCTYPE html>
    <html>
    <head>
        <title>Image Notebook with Division Table</title>
        <style>
            .container {
                position: relative;
                width: fit-content;
            }

            .division-table-section {
                position: absolute;
                top: 30%;
                left: 51%;
                transform: translate(-50%, -50%);
                z-index: 2;
            }

            table {
                border-collapse: collapse;
            }
            
            th, td {
                border: 1px solid orange;
                color: orange; /* Set the font color to orange */
                font-size: 12px; /* Adjust the font size as needed */
                padding: 5px; /* Adjust the padding as needed */
                text-align: center;
            }

            th {
                background-color: light yellow;
            }

            .image-section {
                position: relative;
                top: 0;
                left: 0;
                z-index: 1;
            }

            #image {
                max-width: 100%;
                max-height: 100%;
            }
        </style>
    </head>
    <body>
        



    
        <div class="container">
            <div class="division-table-section">
                <?php
                $limit = 10;
                ?>

                <table>
                    <tr>
                        <th>&nbsp;</th>
                        <?php
                        // Generate table header row
                        for ($j = 1; $j <= $limit; $j++) {
                            echo "<th>$j</th>";
                        }
                        ?>
                    </tr>

                    <?php
                    // Generate table rows
                    for ($i = 1; $i <= $limit; $i++) {
                        echo "<tr>";
                        echo "<td><b>$i</b></td>";

                        // Generate table cells
                        for ($j = 1; $j <= $limit; $j++) {
                            $result = $i / $j;
                            echo "<td>$result</td>";
                        }

                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>

            <div class="image-section">
                <img src="https://www.vhv.rs/dpng/d/452-4520609_piano-design-spiral-notebook-back-spiral-hd-png.png" alt="Your Image" id="image">
            </div>
        </div>
    </body>
    </html>
