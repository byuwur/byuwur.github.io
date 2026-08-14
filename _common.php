<?php
/* 
 * File: _common.php
 * Desc: Handles common initializations such as language and theme; it also includes project-wide common variables
 * Deps: /_var.php
 * Copyright (c) 2025 Andrés Trujillo [Mateus] byUwUr
 */

// This is an example of how you can use SPA.php files along side yours.
require_once "{$TO_HOME}/spa.php/_common.php";
// Just call the SPA.php file and add whatever you need below

const SKILL_SCALE_START = 2018;
const SKILL_PROGRESS_MIN = 55;
const SKILL_PROGRESS_MAX = 95;
const SKILL_PROGRESS_STEP = 5;

/**
 * Calculates years of experience and its relative progress.
 * @param int $startYear Year when the skill was first used.
 * @param int $progressOverride For when the skill is proficient but recently learned.
 * @return array{years: int, progress: int}
 */
function calculate_skill(int $startYear, int $progressOverride = 0): array
{
  $currentYear = (int) date("Y");
  $years = max(0, $currentYear - $startYear);
  $scaleYears = max(1, $currentYear - SKILL_SCALE_START);
  $ratio = min(1, $years / $scaleYears);
  $progress = SKILL_PROGRESS_MIN + ($ratio * (SKILL_PROGRESS_MAX - SKILL_PROGRESS_MIN));
  $progress = SKILL_PROGRESS_MIN + round(($progress - SKILL_PROGRESS_MIN) / SKILL_PROGRESS_STEP) * SKILL_PROGRESS_STEP;
  if ($progressOverride)
    $progress = $progressOverride;

  return [
    "years" => $years,
    "progress" => (int) min(
      SKILL_PROGRESS_MAX,
      max(SKILL_PROGRESS_MIN, $progress)
    ),
  ];
}

$LANG = $LANG ?? [];
if (file_exists("{$TO_HOME}/lang/{$APP_LANG}.php"))
  require_once "{$TO_HOME}/lang/{$APP_LANG}.php";
// Language fallbacks if lang is supported but file doesn't exist
$preferred_lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"] ?? "es", 0, 2);
if (!$LANG && file_exists("{$TO_HOME}/lang/{$preferred_lang}.php"))
  require_once "{$TO_HOME}/lang/{$preferred_lang}.php";
if (!$LANG && file_exists("{$TO_HOME}/lang/en.php"))
  require_once "{$TO_HOME}/lang/en.php";
