<?php
  function pole_podstawy($r) {
    return number_format((3.14 * ($r * $r)),2);
  }
  function pole_powierzchni_bocznej($r, $h) {
    return number_format((2 * 3.14 * $r * $h),2);
  }
  function pole_powierzchni_calkowitej($r, $h) {
    return number_format(((2 * 3.14) * $r * ($r + $h)),2);
  }
  function objetosc($r, $h) {
    return number_format((3.14 * ($r * $r) * $h),2);
  }
?>