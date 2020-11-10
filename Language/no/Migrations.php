<?php

/**
 * Migration language strings.
 *
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
	// Migration Runner
   'missingTable'      => 'Migreringstabell må være satt.',
//   'invalidType'       => 'En ugyldig overføringsnummerering ble spesifisert: {0}',
   'disabled'          => 'Overføringer er lastet, men er deaktivert eller feil konfigurert.',
   'notFound'          => 'Migreringsfil ikke funnet: ',
   'batchNotFound'     => 'Target batch not found: ',
   'empty'             => 'Ingen migrasjonsfiler funnet',
   'gap'               => 'Det er et gap i migrasjonshistorikken i nærheten av versjonsnummeret: ',
   'classNotFound'     => 'Migrasjonsklassen "%s" ble ikke funnet.',
   'missingMethod'     => 'Migrasjonsklassen mangler en "%s" -metode.',

	// Migration Command
   'migHelpLatest'     => "\t\tMigrerer databasen til den siste tilgjengelige migreringen.",
   'migHelpCurrent'    => "\t\tMigrerer databasen til versjonssettet i konfigurasjonen som 'aktuell'.",
   'migHelpVersion'    => "\tMigrerer databasen til versjon {v}.",
   'migHelpRollback'   => "\tUtfører alle overføringer 'ned' til versjon 0.",
   'migHelpRefresh'    => "\t\tAvinstallerer og kjører alle migrasjoner for å oppdatere databasen.",
   'migHelpSeed'       => "\tLagrer eksempeldata etter navn [name].",
   'migCreate'         => "\tOpprett en ny migrering med navnet [name]",
   'nameMigration'     => 'Gi overføringsfilen navn',
   'badCreateName'     => 'Et gyldig overføringsfilnavn må spesifiseres.',
   'writeError'        => 'Feil ved oppretting av filen.',
   'migNumberError'    => 'Overføringsnummeret må være tre sifre, og det må ikke være noen hull i sekvensen.',

   'latest'            => 'Running all new migrations...',
   'generalFault'      => 'Migration failed!',
//   'toLatest'          => 'Overføring til siste versjon...',
   'migInvalidVersion' => 'Ugyldig versjonsnummer spesifisert.',
   'toVersionPH'       => 'Overføring til versjon %s...',
   'toVersion'         => 'Overføring til gjeldende versjon...',
   'rollingBack'       => 'Tilbakestiller migrering...',
   'noneFound'         => 'Ingen migrasjoner ble funnet..',
   'on'                => 'Migrert til: ',
   'migSeeder'         => 'Eksempel data Navn',
   'migMissingSeeder'  => 'Et eksempeldata må spesifiseres.',
   'removed'           => 'rulle tilbake til: ',
   'added'             => 'utføre: ',

   'version'           => 'Versjon',
   'filename'          => 'filnavn',
];
