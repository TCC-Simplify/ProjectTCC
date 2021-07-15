<?php

Broadcast::channel('chat', function ($user) {
  return Auth::check();
});

?>