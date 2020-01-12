<?php
/**
 * Created by IntelliJ IDEA.
 * User: MacSteffen
 * Date: 25.07.19
 * Time: 20:40
 */

require 'Manager.php';

class HandleFood
{
    function getExistingFood() {

        $manager = new Manager();
        $conn    = $manager->connect();
        $query   = "SELECT * FROM food ";

        $stmt    = $conn->prepare($query);
        $stmt->execute();
        $stmt->bind_result($foodName, $amount, $amountType, $bestBefore);

        while($stmt->fetch()) {

            $date1 = new DateTime(date("Y-m-d"));
            $date2 = new DateTime($bestBefore);
            $interval = $date1->diff($date2);

            if ((($interval->days) <= 0) || $date1 > $date2) {
                $foodStatus = 'danger';
            } elseif (($interval->days) <= 7) {
                $foodStatus = 'warning';
            } else {
                $foodStatus = 'good';
            }

            echo'<tr foodStatus="'.$foodStatus.'">'.
                '<td>'. $foodName .'</td>'.
                '<td>'. $amount.'&nbsp;'.$amountType .'</td>'.
                '<td>'. $bestBefore .'</td>'.
                '<td style="text-align: right"><button 
                    type="button" 
                    class="btn btn-light" 
                    data-foodName="'.$foodName.'"
                    data-amount="'.$amount.'"
                    data-amountType="'.$amountType.'"
                    data-bestBefore="'.$bestBefore.'"
                    data-toggle="modal" 
                    data-target="#changeFood">
                    <img src="./img/cog-solid.svg" width="14" />
                    </button>'.
                '</tr>';
        }
        $stmt->close();
        $conn->close();

    }

}
?>
