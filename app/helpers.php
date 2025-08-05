<?php

if (!function_exists('rateLabel')) {
  function rateLabel($rating)
  {
    switch ($rating) {
      case 1:
        return "Tidak Baik";
        break;

      case 2:
        return "Kurang Baik";
        break;

      case 3:
        return "Baik";
        break;

      case 4:
        return "Sangat Baik";
        break;
    }
  }
}

if (!function_exists('nilaPersepsi')) {
  function nilaPersepsi($konversiIKM)
  {
    if ($konversiIKM >= 25.00 && $konversiIKM <= 64.99) {
      return (object) [
        'mutu' => 'D',
        'kinerja' => "Tidak Baik"
      ];
    } elseif ($konversiIKM >= 65.00 && $konversiIKM <= 76.00) {
      return (object) [
        'mutu' => 'C',
        'kinerja' => "Kurang Baik"
      ];
    } elseif ($konversiIKM >= 76.01 && $konversiIKM <= 88.30) {
      return (object) [
        'mutu' => 'B',
        'kinerja' => "Baik"
      ];
    } elseif ($konversiIKM >= 88.31 && $konversiIKM <= 100.00) {
      return (object) [
        'mutu' => 'A',
        'kinerja' => "Sangat Baik"
      ];
    } else {
      return (object) [
        'mutu' => 'X',
        'kinerja' => "Nilai Invalid"
      ];
    }
  }
}

if (!function_exists('getPercentage')) {
  function getPercentage($number, $total)
  {
    if ($total == 0) {
      return 0;
    }
    return $number * 100 / $total;
  }
}

if (!function_exists('getIKM')) {
  function getIKM($respondens, $kuesioners)
  {
    $data = [];

    $bobotNilaiTertimbang = 1;
    if (count($kuesioners) > 0) {
      $bobotNilaiTertimbang = 1 / count($kuesioners);
    }

    $nilaiPersepsiPerUnit = [];
    foreach ($respondens as $keyResponden => $responden) {
      foreach ($responden->answers as $keyAnswer => $answer) {
        $nilaiPersepsiPerUnit[$keyResponden][$keyAnswer] = (object) [
          'question' => $answer->kuesioner->question,
          'answer' => $answer->answer
        ];
      }
    }

    $totalAnswer = [];
    foreach ($nilaiPersepsiPerUnit as $key => $array) {
      for ($i = 0; $i < count($array); $i++) {
        if (!isset($totalAnswer[$i])) {
          $totalAnswer[$i] = 0;
        }
        $totalAnswer[$i] += $array[$i]->answer;
      }
    }

    foreach ($totalAnswer as $key => $value) {
      $data[$key] = (object) [
        'question' => $kuesioners[$key]->question,
        'totalNilaiPersepsiPerUnit' => $value
      ];
    }

    foreach ($data as $key => $value) {
      $data[$key] = (object) [
        'question' => $value->question,
        'totalNilaiPersepsiPerUnit' => $value->totalNilaiPersepsiPerUnit,
        'NRRPerUnsur' => $value->totalNilaiPersepsiPerUnit / count($respondens)
      ];
    }

    foreach ($data as $key => $value) {
      $data[$key] = (object) [
        'question' => $value->question,
        'totalNilaiPersepsiPerUnit' => $value->totalNilaiPersepsiPerUnit,
        'NRRPerUnsur' => $value->NRRPerUnsur,
        'NRRTertimbangUnsur' => $value->NRRPerUnsur * $bobotNilaiTertimbang
      ];
    }

    $IKM = 0;
    foreach ($data as $value) {
      $IKM += $value->NRRTertimbangUnsur;
    }

    $konversiIKM = $IKM * 25;

    return [
      'data' => $data,
      'IKM' => $IKM,
      'konversiIKM' => $konversiIKM,
      'bobotNilaiTertimbang' => $bobotNilaiTertimbang
    ];
  }
}
