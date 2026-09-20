Add-Type -AssemblyName System.Drawing

function Crop-Image {
    param(
        [string]$SourcePath,
        [string]$DestPath,
        [int]$X,
        [int]$Y,
        [int]$Width,
        [int]$Height
    )
    $src = [System.Drawing.Image]::FromFile($SourcePath)
    $rect = New-Object System.Drawing.Rectangle($X, $Y, $Width, $Height)
    $bmp = New-Object System.Drawing.Bitmap($Width, $Height)
    $g = [System.Drawing.Graphics]::FromImage($bmp)
    $g.InterpolationMode = [System.Drawing.Drawing2D.InterpolationMode]::HighQualityBicubic
    $g.PixelOffsetMode = [System.Drawing.Drawing2D.PixelOffsetMode]::HighQuality
    $g.SmoothingMode = [System.Drawing.Drawing2D.SmoothingMode]::HighQuality
    $g.DrawImage($src, 0, 0, $rect, [System.Drawing.GraphicsUnit]::Pixel)
    $bmp.Save($DestPath, [System.Drawing.Imaging.ImageFormat]::Png)
    $g.Dispose()
    $bmp.Dispose()
    $src.Dispose()
    Write-Host "Created $DestPath ($Width x $Height)"
}

$dir = "c:\Users\TheStarRigel\Desktop\Wecon-Asia-Landing-Page\public\images\events"

# Conferences banners
# In conferences-ref.png (1024 x 509):
# Card 1 banner is roughly around x=38, y=121, w=324, h=194
Crop-Image "$dir\conferences-ref.png" "$dir\conf-indonesia.png" 38 121 324 194
# Card 2 banner is roughly around x=38, y=340, w=324, h=194
Crop-Image "$dir\conferences-ref.png" "$dir\conf-malaysia.png" 38 340 324 165

# Awards banners
# In awards-ref.png (1024 x 433):
# Card 1 banner (Malaysia awards): roughly x=50, y=96, w=307, h=184
Crop-Image "$dir\awards-ref.png" "$dir\award-malaysia.png" 50 96 307 184
# Card 2 banner (Indonesia awards): roughly x=50, y=318, w=307, h=110
Crop-Image "$dir\awards-ref.png" "$dir\award-indonesia.png" 50 318 307 110

# Past events banners
# In past-events-ref.png (1024 x 504):
# Card 1: Retail & E-Commerce Manila
Crop-Image "$dir\past-events-ref.png" "$dir\past-retail-manila.png" 30 132 294 175
# Card 2: What's NEXT Philippines
Crop-Image "$dir\past-events-ref.png" "$dir\past-next-philippines.png" 357 132 294 175
# Card 3: What's NEXT Singapore
Crop-Image "$dir\past-events-ref.png" "$dir\past-next-singapore.png" 685 132 294 175

Write-Host "All banners cropped successfully!"
