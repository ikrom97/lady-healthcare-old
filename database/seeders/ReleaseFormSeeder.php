<?php

namespace Database\Seeders;

use App\Models\ReleaseForm;
use Illuminate\Database\Seeder;

class ReleaseFormSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $releaseForms = [
      [
        'title' => 'Гель',
        'svg' => '<svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.44 16c-.14-.11-.3-.21-.43-.34L.24 11.89a.98.98 0 0 1-.21-.35.38.38 0 0 1 .1-.43L1.9 9.6c0-.01.02-.01 0 0l4.53 4.51-.5.59-.93 1.06c-.08.1-.2.16-.3.24h-.25ZM16 .78l-.73 1.08L14.14.73l1.1-.73.76.75v.03ZM7.22 13.19l-4.4-4.4 6.65-5.77 3.5 3.51-5.75 6.66Zm0-5.22-.56.56c-.05.05-.1.1-.14.17a.57.57 0 0 0 .5.87c.15 0 .29-.06.39-.16.2-.2.4-.4.6-.63l.55.56a1 1 0 0 0 .2.16.57.57 0 0 0 .72-.15.57.57 0 0 0-.03-.76L8.84 8a.4.4 0 0 1 .03-.05l.47-.47.13-.14a.58.58 0 0 0-.42-.95.57.57 0 0 0-.4.16c-.21.2-.4.41-.62.64-.2-.22-.38-.42-.58-.6a.8.8 0 0 0-.35-.18.54.54 0 0 0-.6.3.56.56 0 0 0 .1.66l.62.6ZM12.29.58l3.13 3.13-1.64 1.9-3.39-3.39L12.3.58Z" fill="#424A52"/></svg>',
      ], [
        'title' => 'Драже',
        'svg' => '<svg width="16" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.77 14.1a2.79 2.79 0 1 1 .04-5.56 2.79 2.79 0 0 1-.04 5.57ZM5.14 9.37a2.78 2.78 0 1 1 .02-5.57 2.78 2.78 0 0 1-.02 5.57ZM5.64 1.78a.9.9 0 0 1-.9-.87.9.9 0 0 1 1.2-.85.89.89 0 0 1-.3 1.72ZM11.26 3.27a.88.88 0 0 1-1.51.62.9.9 0 0 1-.27-.62.9.9 0 0 1 .9-.9.89.89 0 0 1 .88.9ZM2.32 16.95a.87.87 0 0 1-.83-1.2.9.9 0 0 1 .82-.57.9.9 0 0 1 .88.89.88.88 0 0 1-.87.88ZM8.47 16.95a.88.88 0 0 1-.88-.87.9.9 0 0 1 .9-.9.9.9 0 0 1 .61 1.52.87.87 0 0 1-.63.25ZM.87 11.74a.88.88 0 0 1-.87-.9.89.89 0 0 1 .88-.88.9.9 0 0 1 .9.91.89.89 0 0 1-.9.87ZM5.63 13.16A.88.88 0 0 1 5 11.65a.9.9 0 0 1 .64-.26.9.9 0 0 1 .8 1.23.88.88 0 0 1-.81.54ZM16 16.07a.87.87 0 0 1-.87.88.88.88 0 0 1-.9-.9.9.9 0 0 1 .9-.87.89.89 0 0 1 .87.89Z" fill="#424A52"/></svg>',
      ], [
        'title' => 'Капли',
        'svg' => '<svg width="13" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m5.75 0 .08.13 2.04 3.03c.07.1.07.17 0 .28-.49.7-.97 1.42-1.45 2.13a3.7 3.7 0 0 0 4.9 5.27l.16-.08c-.09.4-.14.78-.25 1.13a5.65 5.65 0 0 1-4.68 4.05 5.63 5.63 0 0 1-3.5-.6 5.65 5.65 0 0 1-2.42-2.46 5.64 5.64 0 0 1 .29-5.73C2.49 4.81 4.06 2.47 5.65.13L5.72 0h.03Z" fill="#424A52"/><path d="m9.48 2.6.1.15L11.72 6c1.1 1.66.08 3.98-1.88 4.24A2.7 2.7 0 0 1 6.8 7.8c-.07-.64.06-1.24.42-1.78l2.18-3.3.08-.11Z" fill="#424A52"/></svg>',
      ], [
        'title' => 'Капсулы',
        'svg' => '<svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.81 0h.63l.29.05c2.03.3 3.74 1.9 4.16 3.9.3 1.4 0 2.66-1.02 3.7l-7.23 7.23A3.75 3.75 0 0 1 4.87 16c-.93 0-1.83-.29-2.6-.82A5 5 0 0 1 .1 12L0 11.44v-.62a3.7 3.7 0 0 1 1.13-2.46l7.23-7.24c.46-.46 1-.8 1.64-.96.27-.07.54-.1.81-.16ZM9.8 11.18 4.82 6.2l-.1.1-2.78 2.78a2.74 2.74 0 0 0-.79 2.62 3.84 3.84 0 0 0 2.53 2.98c1.24.47 2.38.28 3.34-.72.88-.9 1.78-1.78 2.67-2.67l.1-.11Z" fill="#424A52"/></svg>',
      ], [
        'title' => 'Крем',
        'svg' => '<svg width="13" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m4.97.96.05-.02h1.7c.06.01.12.04.16.08l.76.75c.09.08.2.14.32.17.2.03.37-.08.46-.26.1-.18.06-.39-.1-.55L7.4.2A.65.65 0 0 0 6.9 0H2.97a.46.46 0 0 0-.45.4.45.45 0 0 0 .28.5c.08.03.16.04.24.04h.97V2h-.48c-.32 0-.5.18-.51.51v1.49h2.94V2.54c0-.34-.19-.53-.52-.53h-.47V.96Zm5.1 5.4h-.02v.75a1.47 1.47 0 0 0 2.88.3 1.6 1.6 0 0 0-.46-1.62l-2-2-.63-.63a.45.45 0 0 0-.5-.1.44.44 0 0 0-.3.4c0 .17.08.3.2.41.37.4.64.86.73 1.4.06.36.07.73.1 1.09ZM1.75 16a2.27 2.27 0 0 1-.96-.4c-.5-.39-.78-.9-.78-1.54V7.55c0-.14.06-.28.15-.4l2-2.11c.06-.05.12-.07.18-.08h4.3c.07 0 .13.04.18.09l2 2.1a.56.56 0 0 1 .15.4v6.48c0 .98-.68 1.77-1.65 1.94a.4.4 0 0 0-.07.03h-5.5Zm3.21-5.01.17-.01h.36c.27-.01.47-.2.47-.46a.47.47 0 0 0-.46-.48h-.54v-.5c0-.29-.2-.5-.47-.5-.27 0-.47.2-.47.51v.5h-.5c-.3 0-.5.19-.5.46s.2.46.5.47h.5v.53c0 .27.2.47.46.47s.46-.19.48-.46V11Z" fill="#424A52"/><path d="M4.97.96V2h.47c.33 0 .52.2.52.53V4H3.02V2.52c0-.32.19-.5.51-.51h.48V.94h-.97A.73.73 0 0 1 2.8.9a.45.45 0 0 1-.28-.5.46.46 0 0 1 .45-.4H6.9a.65.65 0 0 1 .5.21l.92.92c.16.17.2.37.1.56-.08.17-.27.29-.46.25a.7.7 0 0 1-.32-.17l-.76-.74a.26.26 0 0 0-.16-.08H4.97ZM10.07 6.36c-.03-.36-.04-.73-.1-1.09-.1-.54-.36-1-.74-1.4-.11-.12-.2-.24-.19-.41.02-.2.11-.34.3-.4a.45.45 0 0 1 .5.1l.63.62 2 2c.45.45.62 1 .46 1.62a1.47 1.47 0 0 1-2.88-.3v-.74h.02Z" fill="#424A52"/></svg>',
      ], [
        'title' => 'Раствор',
        'svg' => '<svg width="15" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.7 0c.14.07.3.13.42.21.2.14.3.34.34.58.3 1.64.58 3.3.87 4.94.12.67.25 1.34.35 2.02a.92.92 0 0 1-.76 1.07l-4.67.82-2.2.4c-.36.06-.58-.1-.64-.45l-.1-.58c-.06-.32-.29-.47-.6-.41l-1.78.3c-.3.06-.53-.1-.58-.4l-.1-.6c-.07-.34-.3-.5-.63-.43l-1.28.22c-.3.06-.54-.1-.6-.39L.02 3.13a.91.91 0 0 1 .75-1.06c.88-.17 1.77-.32 2.66-.48A127133.18 127133.18 0 0 1 12.36 0h.35ZM5.95 15.34c0-.08.02-.17.06-.25.04-.08.1-.15.17-.2.07-.07.15-.11.24-.15a.83.83 0 0 1 .8.15c.08.06.13.14.17.21.03.08.05.17.05.25 0 .18-.08.34-.22.46a.8.8 0 0 1-.81.14.76.76 0 0 1-.24-.15.65.65 0 0 1-.16-.2.58.58 0 0 1-.06-.26ZM3.16 10.6a.73.73 0 0 1 .75-.74.75.75 0 0 1 .74.75.76.76 0 0 1-.76.74.75.75 0 0 1-.73-.76ZM2.5 12.28c.18 0 .35.07.47.21a.81.81 0 0 1 0 1.05.62.62 0 0 1-.46.23.58.58 0 0 1-.25-.06.65.65 0 0 1-.2-.16.76.76 0 0 1-.15-.24.84.84 0 0 1-.05-.29c0-.1.01-.2.05-.28.03-.1.08-.17.14-.24a.64.64 0 0 1 .2-.17.57.57 0 0 1 .26-.05ZM1.12 14.7c.1 0 .2.01.28.05.1.03.17.08.24.14.07.06.13.13.16.21.04.08.06.17.06.25 0 .17-.08.34-.22.46a.8.8 0 0 1-.81.14.76.76 0 0 1-.24-.14.65.65 0 0 1-.16-.21.58.58 0 0 1 0-.5c.04-.08.1-.15.16-.21.07-.07.15-.11.24-.14a.83.83 0 0 1 .29-.05ZM3.16 15.35a.64.64 0 0 1 .21-.46.82.82 0 0 1 .53-.2c.2 0 .39.07.53.2.14.12.22.28.22.46 0 .17-.08.33-.22.46a.8.8 0 0 1-.8.14.76.76 0 0 1-.25-.14.65.65 0 0 1-.16-.21.58.58 0 0 1-.06-.25ZM5.3 12.28c.1 0 .18.02.26.06.08.04.15.1.2.16.07.07.11.15.15.24.03.1.04.2.04.29a.8.8 0 0 1-.2.52.62.62 0 0 1-.46.22.62.62 0 0 1-.45-.23.8.8 0 0 1-.19-.53c0-.1.02-.19.05-.28a.75.75 0 0 1 .14-.24.64.64 0 0 1 .22-.16.57.57 0 0 1 .25-.05Z" fill="#424A52"/></svg>',
      ], [
        'title' => 'Сироп',
        'svg' => '<svg width="12" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.01 5.01c.12.12.25.25.4.36.3.24.62.46.93.7a2 2 0 0 1 .84 1.64v1.54l-.05.04c-.12-.14-.24-.29-.38-.42-.15-.16-.32-.3-.49-.43a1.27 1.27 0 0 0-1.54 0c-1.12.93-2.06 2-2.57 3.38a3.6 3.6 0 0 0 1.05 4.1l.06.06-.16.02H2.12C.9 16 0 15.1 0 13.89V7.77c0-.74.3-1.32.9-1.75l.9-.66c.07-.05.16-.1.19-.16.12-.23.3-.23.52-.2.08.02.17.02.25.01H8ZM5.66 8.93h.55c.34-.01.58-.25.58-.56 0-.31-.25-.54-.59-.55h-.54v-.5c0-.37-.24-.62-.57-.62-.34 0-.56.25-.56.6v.52H4a.82.82 0 0 0-.25.03.54.54 0 0 0-.37.6c.05.26.27.46.57.48h.57v.53c0 .33.25.59.57.58.31 0 .55-.25.56-.57v-.54ZM4.98 4.16H2.62c-.8 0-1.35-.52-1.37-1.3V1.3C1.27.52 1.82 0 2.61 0h4.76c.78 0 1.32.51 1.34 1.26.02.55.02 1.1 0 1.65-.02.74-.57 1.24-1.34 1.24H4.98Z" fill="#424A52"/><path d="M8.6 16c-1.87 0-3.2-1.52-2.96-3.18.12-.9.54-1.68 1.1-2.37.4-.48.85-.9 1.29-1.35.22-.22.51-.22.74-.02.9.78 1.68 1.65 2.15 2.75.42.98.43 1.96-.16 2.88A2.65 2.65 0 0 1 8.6 16Z" fill="#424A52"/></svg>',
      ], [
        'title' => 'Спрей',
        'svg' => '<svg width="14" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#a)" fill="#424A52"><path d="M14 0v2.8l-.15.01h-1.29c-.68 0-1.12-.27-1.47-.93H7v.92H2.02A2.4 2.4 0 0 1 4.08.03L4.2 0H7v.93h4.1c.14-.35.4-.63.77-.8l.4-.13H14ZM4 13.18h1V6.56H7.43c.93 0 1.57.6 1.57 1.48v6.48C9 15.4 8.36 16 7.42 16H1.57C.64 16 0 15.4 0 14.53v-6.5c0-.86.65-1.47 1.56-1.47H4v6.62ZM1 3.76h7v1.88H1V3.76Z"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h14v16H0z"/></clipPath></defs></svg>',
      ], [
        'title' => 'Суспензия',
        'svg' => '<svg width="15" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.82 7.58V2.55c0-.37-.1-.48-.49-.48H7.76c-.36 0-.47.11-.47.46v5.05c-.85.09-1.58-.08-2.16-.74-.25-.28-.5-.56-.76-.82a.5.5 0 0 0-.3-.14c-.4-.02-.8 0-1.2 0-.29 0-.4-.13-.4-.43v-3.3c0-.3.12-.42.41-.42h1.17a.38.38 0 0 0 .33-.14c.24-.29.5-.56.75-.84A2.2 2.2 0 0 1 6.85 0h6.02c.82 0 1.33.51 1.33 1.33v5c0 .78-.63 1.34-1.38 1.25ZM0 13.58h3.82c-.05.6.08 1.13.61 1.49.27.18.58.26.9.23.79-.08 1.18-.6 1.26-1.72h7.6c.31 0 .33.02.33.31v1.38c0 .3-.06.34-.35.26-1-.26-2-.54-3.02-.76a11.07 11.07 0 0 0-2.95-.14.22.22 0 0 0-.07.05c-.44.78-1.17 1.08-2 1.2-1.05.15-2.1.2-3.14-.1a5.47 5.47 0 0 1-2.9-2 1.13 1.13 0 0 1-.09-.2Z" fill="#424A52"/><path d="M12.11 7.59H8v-4.8h4.11v4.8ZM3.82 9.44c-.03.58-.3 1.03-.86 1.29-.53.24-1.01.12-1.43-.26-.44-.4-.59-.91-.4-1.49A4.96 4.96 0 0 1 2.3 7.2a.31.31 0 0 1 .37.08 5.13 5.13 0 0 1 1.14 1.97l.01.2ZM4.48 12.88H.22c.29-.45.67-.67 1.17-.68.6-.02 1.2 0 1.81 0h3.34c.52 0 .92.21 1.23.68H5.89v.96c0 .46-.29.77-.7.77-.4 0-.68-.32-.68-.76v-.9a.33.33 0 0 0-.03-.07Z" fill="#424A52"/></svg>',
      ], [
        'title' => 'Таблетки',
        'svg' => '<svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m0 10.35.16-.83c.17-.7.5-1.35.96-1.91l.06-.07 7.28 7.13c-.2.14-.4.29-.62.41a5.1 5.1 0 0 1-2.3.74H4.8c-.04-.02-.09-.02-.14-.03a5.12 5.12 0 0 1-4.5-3.8c-.06-.27-.1-.56-.15-.84v-.8ZM16 5.43c-.05.29-.09.58-.16.86-.25.98-.79 1.86-1.56 2.54a5.22 5.22 0 0 1-2.76 1.25l-.34.03a5.94 5.94 0 0 0-1.43-3.33l5.06-4.94a4.78 4.78 0 0 1 1.16 2.72c0 .05.02.09.03.13v.74ZM9.1 13.98 1.85 6.7a5.14 5.14 0 0 1 6.82.2 5.15 5.15 0 0 1 .45 7.07ZM14.16 1.16 9.1 6.06a6.2 6.2 0 0 0-3.4-1.38c.02-1.3.88-3.23 2.89-4.17a5.3 5.3 0 0 1 5.57.65Z" fill="#424A52"/></svg>',
      ], [
        'title' => 'Укол',
        'svg' => '<svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 3.1c-.2.3-.4.31-.65.05l-.31-.32-1.76 1.76c.04.01.08.04.12.07.32.3.64.62.95.94.56.59.33 1.49-.43 1.7a.92.92 0 0 1-.86-.18c-.19-.15-.35-.33-.53-.5l-.14.13-6.38 6.39a.6.6 0 0 1-.52.19 3.81 3.81 0 0 1-1.84-.57.76.76 0 0 1-.1.15A1356.24 1356.24 0 0 1 .5 15.95a.32.32 0 0 1-.4-.05.32.32 0 0 1-.05-.4 1 1 0 0 1 .14-.16l2.9-2.9.14-.11c-.23-.36-.4-.76-.47-1.17l-.1-.76c-.01-.15.07-.27.17-.37L4.5 8.36l4.74-4.74.18-.15-.44-.4c-.39-.41-.42-.96-.08-1.38.34-.4.98-.49 1.37-.14.36.32.68.66 1.02 1l.14.16L13.18.97l-.33-.32c-.26-.26-.24-.44.06-.65h.18l.3.26c.8.78 1.57 1.56 2.35 2.34.1.1.17.2.26.3v.2ZM7.84 6l.06.03c.51.1 1.03.2 1.54.33.63.17 1.27.3 1.93.33.06 0 .13 0 .16-.03l.5-.5L9.86 4 7.84 6.01Zm2.14 2.18-.66-.66c-.03-.02-.05-.06-.09-.08-.15-.13-.33-.13-.46 0a.32.32 0 0 0 0 .46c.24.26.5.5.76.75l.45-.47Zm-3.34 3.36c-.25-.26-.5-.53-.76-.78a.32.32 0 0 0-.44 0c-.12.12-.15.31-.03.44.26.27.53.52.78.76l.45-.42Zm1.67-1.7c-.13-.13-.26-.27-.41-.4-.15-.13-.34-.13-.46 0a.32.32 0 0 0-.01.45c.13.16.28.29.42.43l.46-.48Z" fill="#424A52"/></svg>',
      ], [
        'title' => 'Ампулы',
        'svg' => '<svg width="14" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.52 0c.5.14.72.49.81.97.08.4.19.79.29 1.18l.74 3a1.1 1.1 0 0 1-.19.99.3.3 0 0 0 .02.4c.06.1.14.18.21.25a2.4 2.4 0 0 1 .65 1.72v6.05c0 .12 0 .25-.02.37A1.19 1.19 0 0 1 11.86 16h-3a1.2 1.2 0 0 1-1.18-1.11 6.3 6.3 0 0 1-.02-.46V8.6c0-.72.2-1.35.72-1.87l.07-.08c.23-.26.23-.3.03-.59a.96.96 0 0 1-.15-.77L9.45.73a.93.93 0 0 1 .68-.7c.02 0 .04-.02.05-.03h.34Zm1.73 8.02a5.9 5.9 0 0 0-.3-.53 5.09 5.09 0 0 0-.35-.42c-.36-.42-.39-.93-.06-1.39a.38.38 0 0 0 .06-.33l-.68-2.77-.4-1.6c-.02-.07-.1-.17-.16-.19-.12-.02-.15.1-.18.2v.03L9.11 5.29a.49.49 0 0 0 .09.45 1.02 1.02 0 0 1 0 1.2c-.13.17-.27.31-.4.47-.15.17-.26.38-.31.6l3.75.01ZM1.4 4.65v-1H.51c-.33 0-.44-.1-.44-.44v-1.1c0-.3.12-.41.4-.41h5.44c.3 0 .42.12.42.41v1.11c0 .32-.12.43-.44.43h-.88v.94c0 .03.07.08.1.1.67.2 1.1.65 1.25 1.33.04.16.05.32.05.48v8.54c0 .62-.34.95-.96.95H.96c-.62 0-.96-.33-.96-.95V6.48c0-.78.34-1.37 1.06-1.7.1-.06.22-.09.33-.13ZM.8 7.58h4.83c0-.42.02-.83 0-1.24-.04-.56-.4-.9-.96-.94-.28-.02-.43-.18-.44-.46V3.67H2.18v1.18c0 .39-.11.52-.51.56-.43.04-.82.36-.86.78-.04.46 0 .92 0 1.4Z" fill="#424A52"/></svg>',
      ], [
        'title' => 'Суппозиторий',
        'svg' => '<svg width="16" height="16" fill="none"><path d="M13.66.04c.43 0 .87-.02 1.3 0 .57.04 1 .45 1.01 1.02.03 1.05.08 2.09-.1 3.12a8.18 8.18 0 0 1-3.12 5.19l-8.07 6.27c-.67.52-1.38.47-1.98-.13L.49 13.3c-.6-.6-.65-1.29-.15-1.96L6 3.7A8.8 8.8 0 0 1 11.92.12c.57-.05 1.16-.08 1.74-.12v.04Zm1.58 2.4V1.22c0-.3-.14-.44-.45-.44-.57 0-1.14-.02-1.71 0-.5.03-1 .05-1.49.15a7.95 7.95 0 0 0-4.94 3.15C4.73 6.65 2.82 9.23.92 11.8c-.26.35-.24.64.07.95L3.25 15c.3.3.6.33.94.06l8.11-6.3a7.5 7.5 0 0 0 2.94-6.33Z" fill="#424A52"/><path d="M15.24 2.44a7.51 7.51 0 0 1-2.94 6.34l-8.1 6.3c-.35.26-.64.24-.95-.07L.99 12.75c-.3-.3-.33-.6-.07-.95l5.73-7.72a7.95 7.95 0 0 1 6.43-3.3c.57-.02 1.14 0 1.71 0 .31 0 .45.14.45.45v1.21Z" fill="#424A52"/></svg>',
      ],
    ];

    foreach ($releaseForms as $releaseForm) {
      ReleaseForm::create([
        'title' => $releaseForm['title'],
        'svg' => $releaseForm['svg'],
      ]);
    }
  }
}
