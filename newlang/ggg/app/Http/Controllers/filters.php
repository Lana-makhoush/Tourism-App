<?php

namespace App\Http\Controllers;

use App\Models\const_trip;
use App\Models\continent;
use App\Models\optionaljourny;
use App\Models\season;
use App\Models\section;
use App\Models\ticket;
use App\Models\type_ticket;
use Illuminate\Http\Request;

class filters extends Controller
{
    public function DisplayTripsDependonFORConstTrip($idC, $idSE, $idSEC, $idtype) {
        if (empty($idC) || empty($idSE) || empty($idSEC) || empty($idtype)) {
            return response()->json([ 'All inputs are required.'], 400);
        }

         $trips = const_trip::where('continents_id', $idC)
            ->where('season_id', $idSE)
            ->where('section_id', $idSEC)
            ->where('type_ticket_id', $idtype)
            ->get();

        if ($trips->isEmpty()) {
            return response()->json(['message' => 'Wait for us! We will add new journeys soon.'], 200);
        } else {
            return response()->json($trips, 201);
        }
    }

    public function DisplayTripsDependonForOptionalTrip($idC, $idSE, $idSEC, $idtype) {

         $trips = optionaljourny::where('continents_id', $idC)
            ->where('season_id', $idSE)
            ->where('section_id', $idSEC)
            ->where('type_ticket_id', $idtype)
            ->get();

        // Check if the query result is empty
        if ($trips->isEmpty()) {
            return response()->json(['message' => 'Wait for us! We will add new journeys soon.'], 200);
        } else {
            return response()->json($trips, 201);
        }
    }

    public function DisplayTripsDependonFoTicket($idC, $idtype) {


        $trips = ticket::where('continents_id', $idC)
            ->where('type_ticket_id', $idtype)
            ->get();

         if ($trips->isEmpty()) {
            return response()->json(['message' => 'Wait for us! We will add new journeys soon.'], 200);
        } else {
            return response()->json($trips, 201);
        }
    }

    public function GetContients(){
        $cont=continent::all();
        return response()->json(
            $cont,200);

    }
    public function GetSeasons(){
        $season=season::all();
        return response()->json(
            $season
        ,200);
    }
    public function GetSections(){
        $section=section::all();
    return response()->json(
        $section
    ,200);   }
    public function GetTypeTicket(){
        $TypeTicket=type_ticket::all();
        return response()->json(
            $TypeTicket
        ,200);
    }

}
