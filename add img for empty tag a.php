jQuery('._self.pt-cv-href-thumbnail.pt-cv-thumb-left').each(function() { if(jQuery(this).html()=="")
                {
                    jQuery(this).append('<img class="pt-cv-thumbnail pull-left" src="/wp-content/uploads/2017/11/i_logo_75x75-1.jpg" width="150" height="150">');
                }})