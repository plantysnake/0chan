<?php
/*****************************************************************************
 *   Copyright (C) 2006-2009, onPHP's MetaConfiguration Builder.             *
 *   Generated by onPHP-1.1.master at 2017-04-07 20:12:53                    *
 *   This file is autogenerated - do not edit.                               *
 *****************************************************************************/

	abstract class AutoAttachmentEmbedDAO extends StorableDAO
	{
		protected $linkName =  'main';
		
		public function getTable()
		{
			return 'attachment_embed';
		}
		
		public function getObjectName()
		{
			return 'AttachmentEmbed';
		}
		
		public function getSequence()
		{
			return 'attachment_embed_id';
		}
	}
?>