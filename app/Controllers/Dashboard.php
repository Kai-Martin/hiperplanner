<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {

        $session = session();

        $today = new \DateTime('NOW');

        echo view('templates/header');
        echo $this->drawCalendar($today->format('n'),$today->format('Y'));
        echo view('templates/footer');

    }
    public function drawCalendar($month, $year)
    {

      $today = new \DateTime('NOW');

      $calendar = '<table cellpadding="0" cellspacing="0" class="table table-bordered">';

	    /* table headings */
	    $headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
	    $calendar.= '<tr><td>'.implode('</td><td>',$headings).'</td></tr>';

	    /* days and weeks vars now ... */
	    $running_day = date('w',mktime(0,0,0,$month,1,$year));
	    $days_in_month = date('t',mktime(0,0,0,$month,1,$year));
	    $days_in_this_week = 1;
	    $day_counter = 0;
	    $dates_array = array();

	    /* row for week one */
	    $calendar.= '<tr>';

	    /* print "blank" days until the first of the current week */
	    for($x = 0; $x < $running_day; $x++):
		     $calendar.= '<td> </td>';
		     $days_in_this_week++;
	    endfor;

	    /* keep going with days.... */
	    for($list_day = 1; $list_day <= $days_in_month; $list_day++):
		      $calendar.= '<td>';
			    /* add in the day number */
			    $calendar.= '<div>'.$list_day.'</div>';

			    /** QUERY THE DATABASE FOR AN ENTRY FOR THIS DAY !!  IF MATCHES FOUND, PRINT THEM !! **/
          if($list_day == $today->format('j')){
            $calendar .= '<p>today</p>';
          }

			    $calendar.= str_repeat('<p> </p>',2);

		      $calendar.= '</td>';
		      if($running_day == 6):
			       $calendar.= '</tr>';
			       if(($day_counter+1) != $days_in_month):
				         $calendar.= '<tr>';
			       endif;
			       $running_day = -1;
			       $days_in_this_week = 0;
		      endif;
		      $days_in_this_week++; $running_day++; $day_counter++;
	    endfor;

	    /* finish the rest of the days in the week */
	    if($days_in_this_week < 8):
		      for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			         $calendar.= '<td> </td>';
		      endfor;
	    endif;

	    /* final row */
	    $calendar.= '</tr>';

	    /* end the table */
	    $calendar.= '</table>';

	    /* all done, return result */
	    return '<div class="container"><div class="row justify-content-xl-center py-5">' . $calendar . '</div></div>';


      // $output = '';
      //
      // $today = new \DateTime("NOW");
      //
      // $daysinMonth = cal_days_in_month(CAL_GREGORIAN, $today->format('m'), $today->format('Y'));
      //
      // for($i = 1; $i <= $daysinMonth; $i++){
      //   $dayofmonth = new \DateTime($today->format('Y') . '-' . $today->format('n') . '-' . $i);
      //   if($dayofmonth->format('D') == 'Mon'){
      //     $output .=
      //   }else{
      //     $output .= 'day' . $i . ' ';
      //   }
      // }
      // print_r($output);
    }
}
