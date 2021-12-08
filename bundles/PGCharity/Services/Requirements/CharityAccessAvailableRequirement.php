<?php
/**
 * 2014 - 2021 Watt Is It
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License X11
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/mit-license.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@paygreen.fr so we can send you a copy immediately.
 *
 * @author    PayGreen <contact@paygreen.fr>
 * @copyright 2014 - 2021 Watt Is It
 * @license   https://opensource.org/licenses/mit-license.php MIT License X11
 * @version   1.0.0
 *
 */

namespace PGI\Impact\PGCharity\Services\Requirements;

use PGI\Impact\PGCharity\Services\Handlers\CharityAccountHandler;
use PGI\Impact\PGClient\Exceptions\Response as ResponseException;
use PGI\Impact\PGFramework\Interfaces\RequirementInterface;

class CharityAccessAvailableRequirement implements RequirementInterface
{
    /** @var CharityAccountHandler */
    private $charityAccountHandler;

    public function __construct(CharityAccountHandler $charityAccountHandler)
    {
        $this->charityAccountHandler = $charityAccountHandler;
    }

    /**
     * @inheritDoc
     * @throws ResponseException
     */
    public function isValid()
    {
        return $this->isCharityAccessAvailable();
    }

    /**
     * @return bool
     * @throws ResponseException
     */
    private function isCharityAccessAvailable()
    {
        $isMandateSigned = $this->charityAccountHandler->isMandateSigned();
        $isTestModeNotExpired = (!$this->charityAccountHandler->isTestModeExpired());

        return ($isTestModeNotExpired || $isMandateSigned);
    }
}