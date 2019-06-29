
@extends(Auth::user()->profile_id!=1 ? 'rentals.user' : 'rentals.adm')
