@extends('layouts.app')

@section('title', $user->username . 'さんの友達')

@section('main')

<div id="app" class="content-area">
  <h2 class="font-weight-bold">
    <a href="{{ route('user.show', $user->id) }}">
      <svg viewBox="0 0 24 24" aria-hidden="true" class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-z80fyv r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-19wmn03" width="24" height="24"><g><path d="M20 11H7.414l4.293-4.293c.39-.39.39-1.023 0-1.414s-1.023-.39-1.414 0l-6 6c-.39.39-.39 1.023 0 1.414l6 6c.195.195.45.293.707.293s.512-.098.707-.293c.39-.39.39-1.023 0-1.414L7.414 13H20c.553 0 1-.447 1-1s-.447-1-1-1z"></path></g></svg>
    </a>
    <span>{{ $user->username }}さんの友達 ({{ $user->friends->count() }})</span>
  </h2>
  <friend-list :auth_user="{{ json_encode(Auth::user()) }}" :friends="{{ $user->friends }}"
  ></friend-list>
  <div class="container-box sub-container hidden">
    @include('layouts.sub_contents')
  </div>
</div>

@endsection
