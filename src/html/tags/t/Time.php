<?hh // strict
/*
 *  Copyright (c) 2004-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

use namespace Facebook\XHP\ChildValidation as XHPChild;

class :time extends :xhp:html-element {
  use XHPChildValidation;
  attribute string datetime;
  category %flow, %phrase;

  protected static function getChildrenDeclaration(): XHPChild\Constraint {
    return XHPChild\anyNumberOf(
      XHPChild\anyOf(XHPChild\pcdata(), XHPChild\category('%phrase')),
    );
  }

  protected string $tagName = 'time';
}
