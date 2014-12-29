#!/bin/bash
#
# @author Jian (boborabit@gmail.com)
#

# check if imagemagick is installed in system.
[ "" == "$(which convert)" ] && echo "imagemagick is required, exit." && exit 1

filename=$(readlink -f $0)
dir="$(cd "$(dirname "${filename}")" && pwd)"
uploads=${dir}/uploads
images=${uploads}/images
thumbs=${uploads}/thumbs

#
# $base  without jpg extension. 
#
thumbConvert()
{
  local base=$1
  local image=${images}/${base}.jpg
  local thumb=${thumbs}/${base}-thumb.jpg

  # only convert when originalImage exits and outputImage not exits.
  if [ -f $image ] && [ ! -f $thumb ]; then
    echo "converting ${image}"
    /usr/bin/convert -thumbnail 100 $image $thumb  
  fi
}

# find all images in images dir.
for base in $(find ${images} -regex ".*.jpg" -exec basename {} .jpg \;); do
  thumbConvert "$base"
done

