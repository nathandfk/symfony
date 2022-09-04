<?php
namespace App\Data;
use Symfony\Component\HttpFoundation\Response;

Class Calendar{
    public static function calendar($isNotDisponible = [], $justProductPage = false){
        $thismonth = date("m",time());
        $thisyear =  date("Y",time());

        $monthStartDay = date('N',strtotime($thisyear.'-'.$thismonth.'-01'));
        $tabYears = [];
        for ($t=$thisyear; $t <= $thisyear+3; $t++) { 
            array_push($tabYears, $t); 
        }
        $calendar = "";
        $tabMonths = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        $m = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
        $calendar .= "<div class='calendar-inner'>
                <div class='calendar-navigate'>
                    <div class='calendar-navigate-btn calendar-navigate-left size28 click click-light-green'></div>
                    <div class='calendar-navigate-btn calendar-navigate-right size28 click click-light-green'>></div>
                </div>
                <div class='calendar-wrapper'>";
        foreach ($tabYears as $year) {
            foreach ($tabMonths as $month) {
                if ($month <= $thismonth-1 && $year == $thisyear) {
                    continue;
                } else if($month >= $thismonth+1 && $year == $thisyear+3){
                    continue;
                }
                $monthStartDay = date('N',strtotime($year.'-'.$month.'-01'));
                $limit = date('t', strtotime($thisyear.'-'.$month.'-01'));
                
                if ($year == $thisyear && $month == $thismonth) { $start = ' start-month'; } else {
                    $start = '';
                }
                $calendar .= "<div class='calendar-month$start'>";
                $calendar .= "<table class='table'>";
                $calendar .= "<caption class='text-center'>".$m[$month-1]." ".$year."</caption>";
                $calendar .= "<tbody>";
                
                $calendar .= "<tr style='text-align: center;'>
                    <td>lun.</td>
                    <td>mar.</td>
                    <td>mer.</td>
                    <td>jeu.</td>
                    <td>ven.</td>
                    <td>sam.</td>
                    <td>dim.</td>
                </tr>";
                $day = $monthStartDay;
                $countCase = 0;
                if ($monthStartDay > 1) {
                    $calendar .= "<tr>";
                    for ($i=1; $i < $monthStartDay; $i++) { 
                        $monthPad = str_pad($month, 2, '0', STR_PAD_LEFT);
                        $iPad = str_pad($i, 2, '0', STR_PAD_LEFT);
                        $calendar .= "<td class='table-calendar'></td>";
                        $countCase++;
                    }
                } else {
                    $calendar .= "<tr>";
                }
                    for ($i=1; $i <= $limit; $i++) { 
                        if ($year < $thisyear) {
                            $class = 'date-isnot-disponible';
                        } else {
                            if ($year == $thisyear) {
                                if ($month < $thismonth) {
                                } else if ($month == $thismonth) {
                                    if ($i < date('d')) {
                                        $class = 'date-isnot-disponible';
                                    } else {
                                        $class = 'date-is-disponible';
                                    }
                                } else {
                                    $class = 'date-is-disponible';
                                }
                            } else {
                                $class = 'date-is-disponible';
                            }
                        }
                        if ($justProductPage == true) {
                            foreach ($isNotDisponible as $dnd) {
                                $explodeDate = explode("-", $dnd);
                                if ($year == $explodeDate[0]) {
                                    if ($month == $explodeDate[1]) {
                                        if ($i == $explodeDate[2]) {
                                            $class = "date-isnot-disponible";
                                        }
                                    }
                                }
                            }
                        }
                        $monthPad = str_pad($month, 2, '0', STR_PAD_LEFT);
                        $iPad = str_pad($i, 2, '0', STR_PAD_LEFT);
                        $calendar .= "<td class='table-calendar $class' data-period='$year-$monthPad-$iPad' data-show='$i ".$m[$month-1]." $year'>".$i."</td>";
                        if ($day < 7) {
                            if ($i == $limit) {
                                for ($j=0; $j < 7-$day; $j++) { 
                                    $calendar .= "<td class='table-calendar'></td>";
                                }
                            }
                            $day++;
                        } else {
                            $calendar .= "</tr>";
                            if ($i < $limit) {
                                $calendar .= "<tr>";
                            }
                            $day = 1;
                        }
                        $countCase++;
                    }

                    if ($countCase < $limit) {
                        $calendar .= "</tr>";
                    }
                    
                $calendar .= "</tbody>";
                $calendar .= "</table>";
                $calendar .= "</div>";
            }
        }
        $calendar .= "</div></div>";
        return $calendar;
    }
}