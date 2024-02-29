<?php

/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';

function homewizardp1_install() {
    homewizardp1::setDaemon();

    $cron = cron::byClassAndFunction('homewizardp1', 'dailyReset');
    if (!is_object($cron)) {
        $cron = new cron();
        $cron->setClass('homewizardp1');
        $cron->setFunction('dailyReset');
    }
    $cron->setEnable(1);
    $cron->setDeamon(0);
    $cron->setSchedule('59 23 * * *');
    $cron->setTimeout(10);
    $cron->save();
}

function homewizardp1_update() {
    homewizardp1::setDaemon();

    $cron = cron::byClassAndFunction('homewizardp1', 'dailyReset');
    if (!is_object($cron)) {
        $cron = new cron();
        $cron->setClass('homewizardp1');
        $cron->setFunction('dailyReset');
    }
    $cron->setEnable(1);
    $cron->setDeamon(0);
    $cron->setSchedule('59 23 * * *');
    $cron->setTimeout(10);
    $cron->save();
}

function homewizardp1_remove() {
    try {
        $crons = cron::searchClassAndFunction('homewizardp1', 'dailyReset');
        if (is_array($crons)) {
            foreach ($crons as $cron) {
                $cron->remove();
            }
        }
    } catch (Exception $e) {
    }
}