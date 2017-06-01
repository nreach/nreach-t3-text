CKEDITOR.plugins.add( 'annotate', {
    icons: 'annotate',
    init: function(editor) {
		//wait until the bottom row has rendered
		editor.on( 'uiReady', function(event) {
			//load our NreachUI
			require([
				'jquery',
				'TYPO3/CMS/NreachT3Base/Nreach',
				'TYPO3/CMS/NreachT3Base/Remote',
			], function (
				$,
				Nreach,
				Remote
			) {
				//no ES6 here :(
				var NreachUI = Nreach.default;
				var parent = CKEDITOR.document.getById(editor.ui.spaceId('resizer')).getParent(),
					mountpoint = CKEDITOR.document.createElement('a');

				mountpoint.$.href = '#';
				mountpoint.$.btn = 'className btn-default nreach-btn-container nreacht3-magicrelation';
				mountpoint.$.onclick = function(){return false;};
				mountpoint.$.innerText = 'nreach';

				parent.append(mountpoint);
				var ui = new NreachUI(['Annotate'], mountpoint.$, {ckeditor: editor}, Remote);
				console.log(ui);
			});
		});
    }
});
