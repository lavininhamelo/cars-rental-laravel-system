
@extends(Auth::user()->profile_id!=3 ? 'rentals.adm' : 'rentals.user')
