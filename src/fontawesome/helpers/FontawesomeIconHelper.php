<?php
/**
 * @link https://github.com/MacGyer/yii2-icon
 * @copyright Copyright (c) 2017 ... MacGyer for pluspunkt coding
 * @license https://github.com/MacGyer/yii2-icon/blob/master/LICENSE
 */

namespace macgyer\yii2icon\fontawesome\helpers;

use macgyer\yii2icon\fontawesome\assets\FontawesomeAsset;
use macgyer\yii2icon\lib\BaseIconHelper;
use macgyer\yii2icon\lib\IconHelperInterface;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\View;

/**
 * This class provides a fluent set of methods to render any Fontawesome 5 icon.
 *
 * For the free version, virtual methods are listed below. Via the `name` parameter of the `getInstance()` method, every
 * FA5 icon can be rendered. Please note, that you need a valid FA 5 pro license and asset files (JS, CSS) to use all pro
 * features.
 *
 * Current FA 5 version reflected: 5.9.0
 *
 * @method static FontawesomeIconHelper fa500px()
 * @method static FontawesomeIconHelper faAccessibleIcon()
 * @method static FontawesomeIconHelper faAccusoft()
 * @method static FontawesomeIconHelper faAcquisitionsIncorporated()
 * @method static FontawesomeIconHelper faAd()
 * @method static FontawesomeIconHelper faAddressBook()
 * @method static FontawesomeIconHelper faAddressCard()
 * @method static FontawesomeIconHelper faAdjust()
 * @method static FontawesomeIconHelper faAdn()
 * @method static FontawesomeIconHelper faAdobe()
 * @method static FontawesomeIconHelper faAdversal()
 * @method static FontawesomeIconHelper faAffiliatetheme()
 * @method static FontawesomeIconHelper faAirFreshener()
 * @method static FontawesomeIconHelper faAirbnb()
 * @method static FontawesomeIconHelper faAlgolia()
 * @method static FontawesomeIconHelper faAlignCenter()
 * @method static FontawesomeIconHelper faAlignJustify()
 * @method static FontawesomeIconHelper faAlignLeft()
 * @method static FontawesomeIconHelper faAlignRight()
 * @method static FontawesomeIconHelper faAlipay()
 * @method static FontawesomeIconHelper faAllergies()
 * @method static FontawesomeIconHelper faAmazon()
 * @method static FontawesomeIconHelper faAmazonPay()
 * @method static FontawesomeIconHelper faAmbulance()
 * @method static FontawesomeIconHelper faAmericanSignLanguageInterpreting()
 * @method static FontawesomeIconHelper faAmilia()
 * @method static FontawesomeIconHelper faAnchor()
 * @method static FontawesomeIconHelper faAndroid()
 * @method static FontawesomeIconHelper faAngellist()
 * @method static FontawesomeIconHelper faAngleDoubleDown()
 * @method static FontawesomeIconHelper faAngleDoubleLeft()
 * @method static FontawesomeIconHelper faAngleDoubleRight()
 * @method static FontawesomeIconHelper faAngleDoubleUp()
 * @method static FontawesomeIconHelper faAngleDown()
 * @method static FontawesomeIconHelper faAngleLeft()
 * @method static FontawesomeIconHelper faAngleRight()
 * @method static FontawesomeIconHelper faAngleUp()
 * @method static FontawesomeIconHelper faAngry()
 * @method static FontawesomeIconHelper faAngrycreative()
 * @method static FontawesomeIconHelper faAngular()
 * @method static FontawesomeIconHelper faAnkh()
 * @method static FontawesomeIconHelper faAppStore()
 * @method static FontawesomeIconHelper faAppStoreIos()
 * @method static FontawesomeIconHelper faApper()
 * @method static FontawesomeIconHelper faApple()
 * @method static FontawesomeIconHelper faAppleAlt()
 * @method static FontawesomeIconHelper faApplePay()
 * @method static FontawesomeIconHelper faArchive()
 * @method static FontawesomeIconHelper faArchway()
 * @method static FontawesomeIconHelper faArrowAltCircleDown()
 * @method static FontawesomeIconHelper faArrowAltCircleLeft()
 * @method static FontawesomeIconHelper faArrowAltCircleRight()
 * @method static FontawesomeIconHelper faArrowAltCircleUp()
 * @method static FontawesomeIconHelper faArrowCircleDown()
 * @method static FontawesomeIconHelper faArrowCircleLeft()
 * @method static FontawesomeIconHelper faArrowCircleRight()
 * @method static FontawesomeIconHelper faArrowCircleUp()
 * @method static FontawesomeIconHelper faArrowDown()
 * @method static FontawesomeIconHelper faArrowLeft()
 * @method static FontawesomeIconHelper faArrowRight()
 * @method static FontawesomeIconHelper faArrowUp()
 * @method static FontawesomeIconHelper faArrowsAlt()
 * @method static FontawesomeIconHelper faArrowsAltH()
 * @method static FontawesomeIconHelper faArrowsAltV()
 * @method static FontawesomeIconHelper faArtstation()
 * @method static FontawesomeIconHelper faAssistiveListeningSystems()
 * @method static FontawesomeIconHelper faAsterisk()
 * @method static FontawesomeIconHelper faAsymmetrik()
 * @method static FontawesomeIconHelper faAt()
 * @method static FontawesomeIconHelper faAtlas()
 * @method static FontawesomeIconHelper faAtlassian()
 * @method static FontawesomeIconHelper faAtom()
 * @method static FontawesomeIconHelper faAudible()
 * @method static FontawesomeIconHelper faAudioDescription()
 * @method static FontawesomeIconHelper faAutoprefixer()
 * @method static FontawesomeIconHelper faAvianex()
 * @method static FontawesomeIconHelper faAviato()
 * @method static FontawesomeIconHelper faAward()
 * @method static FontawesomeIconHelper faAws()
 * @method static FontawesomeIconHelper faBaby()
 * @method static FontawesomeIconHelper faBabyCarriage()
 * @method static FontawesomeIconHelper faBackspace()
 * @method static FontawesomeIconHelper faBackward()
 * @method static FontawesomeIconHelper faBacon()
 * @method static FontawesomeIconHelper faBalanceScale()
 * @method static FontawesomeIconHelper faBalanceScaleLeft()
 * @method static FontawesomeIconHelper faBalanceScaleRight()
 * @method static FontawesomeIconHelper faBan()
 * @method static FontawesomeIconHelper faBandAid()
 * @method static FontawesomeIconHelper faBandcamp()
 * @method static FontawesomeIconHelper faBarcode()
 * @method static FontawesomeIconHelper faBars()
 * @method static FontawesomeIconHelper faBaseballBall()
 * @method static FontawesomeIconHelper faBasketballBall()
 * @method static FontawesomeIconHelper faBath()
 * @method static FontawesomeIconHelper faBatteryEmpty()
 * @method static FontawesomeIconHelper faBatteryFull()
 * @method static FontawesomeIconHelper faBatteryHalf()
 * @method static FontawesomeIconHelper faBatteryQuarter()
 * @method static FontawesomeIconHelper faBatteryThreeQuarters()
 * @method static FontawesomeIconHelper faBattleNet()
 * @method static FontawesomeIconHelper faBed()
 * @method static FontawesomeIconHelper faBeer()
 * @method static FontawesomeIconHelper faBehance()
 * @method static FontawesomeIconHelper faBehanceSquare()
 * @method static FontawesomeIconHelper faBell()
 * @method static FontawesomeIconHelper faBellSlash()
 * @method static FontawesomeIconHelper faBezierCurve()
 * @method static FontawesomeIconHelper faBible()
 * @method static FontawesomeIconHelper faBicycle()
 * @method static FontawesomeIconHelper faBiking()
 * @method static FontawesomeIconHelper faBimobject()
 * @method static FontawesomeIconHelper faBinoculars()
 * @method static FontawesomeIconHelper faBiohazard()
 * @method static FontawesomeIconHelper faBirthdayCake()
 * @method static FontawesomeIconHelper faBitbucket()
 * @method static FontawesomeIconHelper faBitcoin()
 * @method static FontawesomeIconHelper faBity()
 * @method static FontawesomeIconHelper faBlackTie()
 * @method static FontawesomeIconHelper faBlackberry()
 * @method static FontawesomeIconHelper faBlender()
 * @method static FontawesomeIconHelper faBlenderPhone()
 * @method static FontawesomeIconHelper faBlind()
 * @method static FontawesomeIconHelper faBlog()
 * @method static FontawesomeIconHelper faBlogger()
 * @method static FontawesomeIconHelper faBloggerB()
 * @method static FontawesomeIconHelper faBluetooth()
 * @method static FontawesomeIconHelper faBluetoothB()
 * @method static FontawesomeIconHelper faBold()
 * @method static FontawesomeIconHelper faBolt()
 * @method static FontawesomeIconHelper faBomb()
 * @method static FontawesomeIconHelper faBone()
 * @method static FontawesomeIconHelper faBong()
 * @method static FontawesomeIconHelper faBook()
 * @method static FontawesomeIconHelper faBookDead()
 * @method static FontawesomeIconHelper faBookMedical()
 * @method static FontawesomeIconHelper faBookOpen()
 * @method static FontawesomeIconHelper faBookReader()
 * @method static FontawesomeIconHelper faBookmark()
 * @method static FontawesomeIconHelper faBootstrap()
 * @method static FontawesomeIconHelper faBorderAll()
 * @method static FontawesomeIconHelper faBorderNone()
 * @method static FontawesomeIconHelper faBorderStyle()
 * @method static FontawesomeIconHelper faBowlingBall()
 * @method static FontawesomeIconHelper faBox()
 * @method static FontawesomeIconHelper faBoxOpen()
 * @method static FontawesomeIconHelper faBoxes()
 * @method static FontawesomeIconHelper faBraille()
 * @method static FontawesomeIconHelper faBrain()
 * @method static FontawesomeIconHelper faBreadSlice()
 * @method static FontawesomeIconHelper faBriefcase()
 * @method static FontawesomeIconHelper faBriefcaseMedical()
 * @method static FontawesomeIconHelper faBroadcastTower()
 * @method static FontawesomeIconHelper faBroom()
 * @method static FontawesomeIconHelper faBrush()
 * @method static FontawesomeIconHelper faBtc()
 * @method static FontawesomeIconHelper faBuffer()
 * @method static FontawesomeIconHelper faBug()
 * @method static FontawesomeIconHelper faBuilding()
 * @method static FontawesomeIconHelper faBullhorn()
 * @method static FontawesomeIconHelper faBullseye()
 * @method static FontawesomeIconHelper faBurn()
 * @method static FontawesomeIconHelper faBuromobelexperte()
 * @method static FontawesomeIconHelper faBus()
 * @method static FontawesomeIconHelper faBusAlt()
 * @method static FontawesomeIconHelper faBusinessTime()
 * @method static FontawesomeIconHelper faBuysellads()
 * @method static FontawesomeIconHelper faCalculator()
 * @method static FontawesomeIconHelper faCalendar()
 * @method static FontawesomeIconHelper faCalendarAlt()
 * @method static FontawesomeIconHelper faCalendarCheck()
 * @method static FontawesomeIconHelper faCalendarDay()
 * @method static FontawesomeIconHelper faCalendarMinus()
 * @method static FontawesomeIconHelper faCalendarPlus()
 * @method static FontawesomeIconHelper faCalendarTimes()
 * @method static FontawesomeIconHelper faCalendarWeek()
 * @method static FontawesomeIconHelper faCamera()
 * @method static FontawesomeIconHelper faCameraRetro()
 * @method static FontawesomeIconHelper faCampground()
 * @method static FontawesomeIconHelper faCanadianMapleLeaf()
 * @method static FontawesomeIconHelper faCandyCane()
 * @method static FontawesomeIconHelper faCannabis()
 * @method static FontawesomeIconHelper faCapsules()
 * @method static FontawesomeIconHelper faCar()
 * @method static FontawesomeIconHelper faCarAlt()
 * @method static FontawesomeIconHelper faCarBattery()
 * @method static FontawesomeIconHelper faCarCrash()
 * @method static FontawesomeIconHelper faCarSide()
 * @method static FontawesomeIconHelper faCaretDown()
 * @method static FontawesomeIconHelper faCaretLeft()
 * @method static FontawesomeIconHelper faCaretRight()
 * @method static FontawesomeIconHelper faCaretSquareDown()
 * @method static FontawesomeIconHelper faCaretSquareLeft()
 * @method static FontawesomeIconHelper faCaretSquareRight()
 * @method static FontawesomeIconHelper faCaretSquareUp()
 * @method static FontawesomeIconHelper faCaretUp()
 * @method static FontawesomeIconHelper faCarrot()
 * @method static FontawesomeIconHelper faCartArrowDown()
 * @method static FontawesomeIconHelper faCartPlus()
 * @method static FontawesomeIconHelper faCashRegister()
 * @method static FontawesomeIconHelper faCat()
 * @method static FontawesomeIconHelper faCcAmazonPay()
 * @method static FontawesomeIconHelper faCcAmex()
 * @method static FontawesomeIconHelper faCcApplePay()
 * @method static FontawesomeIconHelper faCcDinersClub()
 * @method static FontawesomeIconHelper faCcDiscover()
 * @method static FontawesomeIconHelper faCcJcb()
 * @method static FontawesomeIconHelper faCcMastercard()
 * @method static FontawesomeIconHelper faCcPaypal()
 * @method static FontawesomeIconHelper faCcStripe()
 * @method static FontawesomeIconHelper faCcVisa()
 * @method static FontawesomeIconHelper faCentercode()
 * @method static FontawesomeIconHelper faCentos()
 * @method static FontawesomeIconHelper faCertificate()
 * @method static FontawesomeIconHelper faChair()
 * @method static FontawesomeIconHelper faChalkboard()
 * @method static FontawesomeIconHelper faChalkboardTeacher()
 * @method static FontawesomeIconHelper faChargingStation()
 * @method static FontawesomeIconHelper faChartArea()
 * @method static FontawesomeIconHelper faChartBar()
 * @method static FontawesomeIconHelper faChartLine()
 * @method static FontawesomeIconHelper faChartPie()
 * @method static FontawesomeIconHelper faCheck()
 * @method static FontawesomeIconHelper faCheckCircle()
 * @method static FontawesomeIconHelper faCheckDouble()
 * @method static FontawesomeIconHelper faCheckSquare()
 * @method static FontawesomeIconHelper faCheese()
 * @method static FontawesomeIconHelper faChess()
 * @method static FontawesomeIconHelper faChessBishop()
 * @method static FontawesomeIconHelper faChessBoard()
 * @method static FontawesomeIconHelper faChessKing()
 * @method static FontawesomeIconHelper faChessKnight()
 * @method static FontawesomeIconHelper faChessPawn()
 * @method static FontawesomeIconHelper faChessQueen()
 * @method static FontawesomeIconHelper faChessRook()
 * @method static FontawesomeIconHelper faChevronCircleDown()
 * @method static FontawesomeIconHelper faChevronCircleLeft()
 * @method static FontawesomeIconHelper faChevronCircleRight()
 * @method static FontawesomeIconHelper faChevronCircleUp()
 * @method static FontawesomeIconHelper faChevronDown()
 * @method static FontawesomeIconHelper faChevronLeft()
 * @method static FontawesomeIconHelper faChevronRight()
 * @method static FontawesomeIconHelper faChevronUp()
 * @method static FontawesomeIconHelper faChild()
 * @method static FontawesomeIconHelper faChrome()
 * @method static FontawesomeIconHelper faChromecast()
 * @method static FontawesomeIconHelper faChurch()
 * @method static FontawesomeIconHelper faCircle()
 * @method static FontawesomeIconHelper faCircleNotch()
 * @method static FontawesomeIconHelper faCity()
 * @method static FontawesomeIconHelper faClinicMedical()
 * @method static FontawesomeIconHelper faClipboard()
 * @method static FontawesomeIconHelper faClipboardCheck()
 * @method static FontawesomeIconHelper faClipboardList()
 * @method static FontawesomeIconHelper faClock()
 * @method static FontawesomeIconHelper faClone()
 * @method static FontawesomeIconHelper faClosedCaptioning()
 * @method static FontawesomeIconHelper faCloud()
 * @method static FontawesomeIconHelper faCloudDownloadAlt()
 * @method static FontawesomeIconHelper faCloudMeatball()
 * @method static FontawesomeIconHelper faCloudMoon()
 * @method static FontawesomeIconHelper faCloudMoonRain()
 * @method static FontawesomeIconHelper faCloudRain()
 * @method static FontawesomeIconHelper faCloudShowersHeavy()
 * @method static FontawesomeIconHelper faCloudSun()
 * @method static FontawesomeIconHelper faCloudSunRain()
 * @method static FontawesomeIconHelper faCloudUploadAlt()
 * @method static FontawesomeIconHelper faCloudscale()
 * @method static FontawesomeIconHelper faCloudsmith()
 * @method static FontawesomeIconHelper faCloudversify()
 * @method static FontawesomeIconHelper faCocktail()
 * @method static FontawesomeIconHelper faCode()
 * @method static FontawesomeIconHelper faCodeBranch()
 * @method static FontawesomeIconHelper faCodepen()
 * @method static FontawesomeIconHelper faCodiepie()
 * @method static FontawesomeIconHelper faCoffee()
 * @method static FontawesomeIconHelper faCog()
 * @method static FontawesomeIconHelper faCogs()
 * @method static FontawesomeIconHelper faCoins()
 * @method static FontawesomeIconHelper faColumns()
 * @method static FontawesomeIconHelper faComment()
 * @method static FontawesomeIconHelper faCommentAlt()
 * @method static FontawesomeIconHelper faCommentDollar()
 * @method static FontawesomeIconHelper faCommentDots()
 * @method static FontawesomeIconHelper faCommentMedical()
 * @method static FontawesomeIconHelper faCommentSlash()
 * @method static FontawesomeIconHelper faComments()
 * @method static FontawesomeIconHelper faCommentsDollar()
 * @method static FontawesomeIconHelper faCompactDisc()
 * @method static FontawesomeIconHelper faCompass()
 * @method static FontawesomeIconHelper faCompress()
 * @method static FontawesomeIconHelper faCompressArrowsAlt()
 * @method static FontawesomeIconHelper faConciergeBell()
 * @method static FontawesomeIconHelper faConfluence()
 * @method static FontawesomeIconHelper faConnectdevelop()
 * @method static FontawesomeIconHelper faContao()
 * @method static FontawesomeIconHelper faCookie()
 * @method static FontawesomeIconHelper faCookieBite()
 * @method static FontawesomeIconHelper faCopy()
 * @method static FontawesomeIconHelper faCopyright()
 * @method static FontawesomeIconHelper faCouch()
 * @method static FontawesomeIconHelper faCpanel()
 * @method static FontawesomeIconHelper faCreativeCommons()
 * @method static FontawesomeIconHelper faCreativeCommonsBy()
 * @method static FontawesomeIconHelper faCreativeCommonsNc()
 * @method static FontawesomeIconHelper faCreativeCommonsNcEu()
 * @method static FontawesomeIconHelper faCreativeCommonsNcJp()
 * @method static FontawesomeIconHelper faCreativeCommonsNd()
 * @method static FontawesomeIconHelper faCreativeCommonsPd()
 * @method static FontawesomeIconHelper faCreativeCommonsPdAlt()
 * @method static FontawesomeIconHelper faCreativeCommonsRemix()
 * @method static FontawesomeIconHelper faCreativeCommonsSa()
 * @method static FontawesomeIconHelper faCreativeCommonsSampling()
 * @method static FontawesomeIconHelper faCreativeCommonsSamplingPlus()
 * @method static FontawesomeIconHelper faCreativeCommonsShare()
 * @method static FontawesomeIconHelper faCreativeCommonsZero()
 * @method static FontawesomeIconHelper faCreditCard()
 * @method static FontawesomeIconHelper faCriticalRole()
 * @method static FontawesomeIconHelper faCrop()
 * @method static FontawesomeIconHelper faCropAlt()
 * @method static FontawesomeIconHelper faCross()
 * @method static FontawesomeIconHelper faCrosshairs()
 * @method static FontawesomeIconHelper faCrow()
 * @method static FontawesomeIconHelper faCrown()
 * @method static FontawesomeIconHelper faCrutch()
 * @method static FontawesomeIconHelper faCss3()
 * @method static FontawesomeIconHelper faCss3Alt()
 * @method static FontawesomeIconHelper faCube()
 * @method static FontawesomeIconHelper faCubes()
 * @method static FontawesomeIconHelper faCut()
 * @method static FontawesomeIconHelper faCuttlefish()
 * @method static FontawesomeIconHelper faDAndD()
 * @method static FontawesomeIconHelper faDAndDBeyond()
 * @method static FontawesomeIconHelper faDashcube()
 * @method static FontawesomeIconHelper faDatabase()
 * @method static FontawesomeIconHelper faDeaf()
 * @method static FontawesomeIconHelper faDelicious()
 * @method static FontawesomeIconHelper faDemocrat()
 * @method static FontawesomeIconHelper faDeploydog()
 * @method static FontawesomeIconHelper faDeskpro()
 * @method static FontawesomeIconHelper faDesktop()
 * @method static FontawesomeIconHelper faDev()
 * @method static FontawesomeIconHelper faDeviantart()
 * @method static FontawesomeIconHelper faDharmachakra()
 * @method static FontawesomeIconHelper faDhl()
 * @method static FontawesomeIconHelper faDiagnoses()
 * @method static FontawesomeIconHelper faDiaspora()
 * @method static FontawesomeIconHelper faDice()
 * @method static FontawesomeIconHelper faDiceD20()
 * @method static FontawesomeIconHelper faDiceD6()
 * @method static FontawesomeIconHelper faDiceFive()
 * @method static FontawesomeIconHelper faDiceFour()
 * @method static FontawesomeIconHelper faDiceOne()
 * @method static FontawesomeIconHelper faDiceSix()
 * @method static FontawesomeIconHelper faDiceThree()
 * @method static FontawesomeIconHelper faDiceTwo()
 * @method static FontawesomeIconHelper faDigg()
 * @method static FontawesomeIconHelper faDigitalOcean()
 * @method static FontawesomeIconHelper faDigitalTachograph()
 * @method static FontawesomeIconHelper faDirections()
 * @method static FontawesomeIconHelper faDiscord()
 * @method static FontawesomeIconHelper faDiscourse()
 * @method static FontawesomeIconHelper faDivide()
 * @method static FontawesomeIconHelper faDizzy()
 * @method static FontawesomeIconHelper faDna()
 * @method static FontawesomeIconHelper faDochub()
 * @method static FontawesomeIconHelper faDocker()
 * @method static FontawesomeIconHelper faDog()
 * @method static FontawesomeIconHelper faDollarSign()
 * @method static FontawesomeIconHelper faDolly()
 * @method static FontawesomeIconHelper faDollyFlatbed()
 * @method static FontawesomeIconHelper faDonate()
 * @method static FontawesomeIconHelper faDoorClosed()
 * @method static FontawesomeIconHelper faDoorOpen()
 * @method static FontawesomeIconHelper faDotCircle()
 * @method static FontawesomeIconHelper faDove()
 * @method static FontawesomeIconHelper faDownload()
 * @method static FontawesomeIconHelper faDraft2digital()
 * @method static FontawesomeIconHelper faDraftingCompass()
 * @method static FontawesomeIconHelper faDragon()
 * @method static FontawesomeIconHelper faDrawPolygon()
 * @method static FontawesomeIconHelper faDribbble()
 * @method static FontawesomeIconHelper faDribbbleSquare()
 * @method static FontawesomeIconHelper faDropbox()
 * @method static FontawesomeIconHelper faDrum()
 * @method static FontawesomeIconHelper faDrumSteelpan()
 * @method static FontawesomeIconHelper faDrumstickBite()
 * @method static FontawesomeIconHelper faDrupal()
 * @method static FontawesomeIconHelper faDumbbell()
 * @method static FontawesomeIconHelper faDumpster()
 * @method static FontawesomeIconHelper faDumpsterFire()
 * @method static FontawesomeIconHelper faDungeon()
 * @method static FontawesomeIconHelper faDyalog()
 * @method static FontawesomeIconHelper faEarlybirds()
 * @method static FontawesomeIconHelper faEbay()
 * @method static FontawesomeIconHelper faEdge()
 * @method static FontawesomeIconHelper faEdit()
 * @method static FontawesomeIconHelper faEgg()
 * @method static FontawesomeIconHelper faEject()
 * @method static FontawesomeIconHelper faElementor()
 * @method static FontawesomeIconHelper faEllipsisH()
 * @method static FontawesomeIconHelper faEllipsisV()
 * @method static FontawesomeIconHelper faEllo()
 * @method static FontawesomeIconHelper faEmber()
 * @method static FontawesomeIconHelper faEmpire()
 * @method static FontawesomeIconHelper faEnvelope()
 * @method static FontawesomeIconHelper faEnvelopeOpen()
 * @method static FontawesomeIconHelper faEnvelopeOpenText()
 * @method static FontawesomeIconHelper faEnvelopeSquare()
 * @method static FontawesomeIconHelper faEnvira()
 * @method static FontawesomeIconHelper faEquals()
 * @method static FontawesomeIconHelper faEraser()
 * @method static FontawesomeIconHelper faErlang()
 * @method static FontawesomeIconHelper faEthereum()
 * @method static FontawesomeIconHelper faEthernet()
 * @method static FontawesomeIconHelper faEtsy()
 * @method static FontawesomeIconHelper faEuroSign()
 * @method static FontawesomeIconHelper faEvernote()
 * @method static FontawesomeIconHelper faExchangeAlt()
 * @method static FontawesomeIconHelper faExclamation()
 * @method static FontawesomeIconHelper faExclamationCircle()
 * @method static FontawesomeIconHelper faExclamationTriangle()
 * @method static FontawesomeIconHelper faExpand()
 * @method static FontawesomeIconHelper faExpandArrowsAlt()
 * @method static FontawesomeIconHelper faExpeditedssl()
 * @method static FontawesomeIconHelper faExternalLinkAlt()
 * @method static FontawesomeIconHelper faExternalLinkSquareAlt()
 * @method static FontawesomeIconHelper faEye()
 * @method static FontawesomeIconHelper faEyeDropper()
 * @method static FontawesomeIconHelper faEyeSlash()
 * @method static FontawesomeIconHelper faFacebook()
 * @method static FontawesomeIconHelper faFacebookF()
 * @method static FontawesomeIconHelper faFacebookMessenger()
 * @method static FontawesomeIconHelper faFacebookSquare()
 * @method static FontawesomeIconHelper faFan()
 * @method static FontawesomeIconHelper faFantasyFlightGames()
 * @method static FontawesomeIconHelper faFastBackward()
 * @method static FontawesomeIconHelper faFastForward()
 * @method static FontawesomeIconHelper faFax()
 * @method static FontawesomeIconHelper faFeather()
 * @method static FontawesomeIconHelper faFeatherAlt()
 * @method static FontawesomeIconHelper faFedex()
 * @method static FontawesomeIconHelper faFedora()
 * @method static FontawesomeIconHelper faFemale()
 * @method static FontawesomeIconHelper faFighterJet()
 * @method static FontawesomeIconHelper faFigma()
 * @method static FontawesomeIconHelper faFile()
 * @method static FontawesomeIconHelper faFileAlt()
 * @method static FontawesomeIconHelper faFileArchive()
 * @method static FontawesomeIconHelper faFileAudio()
 * @method static FontawesomeIconHelper faFileCode()
 * @method static FontawesomeIconHelper faFileContract()
 * @method static FontawesomeIconHelper faFileCsv()
 * @method static FontawesomeIconHelper faFileDownload()
 * @method static FontawesomeIconHelper faFileExcel()
 * @method static FontawesomeIconHelper faFileExport()
 * @method static FontawesomeIconHelper faFileImage()
 * @method static FontawesomeIconHelper faFileImport()
 * @method static FontawesomeIconHelper faFileInvoice()
 * @method static FontawesomeIconHelper faFileInvoiceDollar()
 * @method static FontawesomeIconHelper faFileMedical()
 * @method static FontawesomeIconHelper faFileMedicalAlt()
 * @method static FontawesomeIconHelper faFilePdf()
 * @method static FontawesomeIconHelper faFilePowerpoint()
 * @method static FontawesomeIconHelper faFilePrescription()
 * @method static FontawesomeIconHelper faFileSignature()
 * @method static FontawesomeIconHelper faFileUpload()
 * @method static FontawesomeIconHelper faFileVideo()
 * @method static FontawesomeIconHelper faFileWord()
 * @method static FontawesomeIconHelper faFill()
 * @method static FontawesomeIconHelper faFillDrip()
 * @method static FontawesomeIconHelper faFilm()
 * @method static FontawesomeIconHelper faFilter()
 * @method static FontawesomeIconHelper faFingerprint()
 * @method static FontawesomeIconHelper faFire()
 * @method static FontawesomeIconHelper faFireAlt()
 * @method static FontawesomeIconHelper faFireExtinguisher()
 * @method static FontawesomeIconHelper faFirefox()
 * @method static FontawesomeIconHelper faFirstAid()
 * @method static FontawesomeIconHelper faFirstOrder()
 * @method static FontawesomeIconHelper faFirstOrderAlt()
 * @method static FontawesomeIconHelper faFirstdraft()
 * @method static FontawesomeIconHelper faFish()
 * @method static FontawesomeIconHelper faFistRaised()
 * @method static FontawesomeIconHelper faFlag()
 * @method static FontawesomeIconHelper faFlagCheckered()
 * @method static FontawesomeIconHelper faFlagUsa()
 * @method static FontawesomeIconHelper faFlask()
 * @method static FontawesomeIconHelper faFlickr()
 * @method static FontawesomeIconHelper faFlipboard()
 * @method static FontawesomeIconHelper faFlushed()
 * @method static FontawesomeIconHelper faFly()
 * @method static FontawesomeIconHelper faFolder()
 * @method static FontawesomeIconHelper faFolderMinus()
 * @method static FontawesomeIconHelper faFolderOpen()
 * @method static FontawesomeIconHelper faFolderPlus()
 * @method static FontawesomeIconHelper faFont()
 * @method static FontawesomeIconHelper faFontAwesome()
 * @method static FontawesomeIconHelper faFontAwesomeAlt()
 * @method static FontawesomeIconHelper faFontAwesomeFlag()
 * @method static FontawesomeIconHelper faFonticons()
 * @method static FontawesomeIconHelper faFonticonsFi()
 * @method static FontawesomeIconHelper faFootballBall()
 * @method static FontawesomeIconHelper faFortAwesome()
 * @method static FontawesomeIconHelper faFortAwesomeAlt()
 * @method static FontawesomeIconHelper faForumbee()
 * @method static FontawesomeIconHelper faForward()
 * @method static FontawesomeIconHelper faFoursquare()
 * @method static FontawesomeIconHelper faFreeCodeCamp()
 * @method static FontawesomeIconHelper faFreebsd()
 * @method static FontawesomeIconHelper faFrog()
 * @method static FontawesomeIconHelper faFrown()
 * @method static FontawesomeIconHelper faFrownOpen()
 * @method static FontawesomeIconHelper faFulcrum()
 * @method static FontawesomeIconHelper faFunnelDollar()
 * @method static FontawesomeIconHelper faFutbol()
 * @method static FontawesomeIconHelper faGalacticRepublic()
 * @method static FontawesomeIconHelper faGalacticSenate()
 * @method static FontawesomeIconHelper faGamepad()
 * @method static FontawesomeIconHelper faGasPump()
 * @method static FontawesomeIconHelper faGavel()
 * @method static FontawesomeIconHelper faGem()
 * @method static FontawesomeIconHelper faGenderless()
 * @method static FontawesomeIconHelper faGetPocket()
 * @method static FontawesomeIconHelper faGg()
 * @method static FontawesomeIconHelper faGgCircle()
 * @method static FontawesomeIconHelper faGhost()
 * @method static FontawesomeIconHelper faGift()
 * @method static FontawesomeIconHelper faGifts()
 * @method static FontawesomeIconHelper faGit()
 * @method static FontawesomeIconHelper faGitAlt()
 * @method static FontawesomeIconHelper faGitSquare()
 * @method static FontawesomeIconHelper faGithub()
 * @method static FontawesomeIconHelper faGithubAlt()
 * @method static FontawesomeIconHelper faGithubSquare()
 * @method static FontawesomeIconHelper faGitkraken()
 * @method static FontawesomeIconHelper faGitlab()
 * @method static FontawesomeIconHelper faGitter()
 * @method static FontawesomeIconHelper faGlassCheers()
 * @method static FontawesomeIconHelper faGlassMartini()
 * @method static FontawesomeIconHelper faGlassMartiniAlt()
 * @method static FontawesomeIconHelper faGlassWhiskey()
 * @method static FontawesomeIconHelper faGlasses()
 * @method static FontawesomeIconHelper faGlide()
 * @method static FontawesomeIconHelper faGlideG()
 * @method static FontawesomeIconHelper faGlobe()
 * @method static FontawesomeIconHelper faGlobeAfrica()
 * @method static FontawesomeIconHelper faGlobeAmericas()
 * @method static FontawesomeIconHelper faGlobeAsia()
 * @method static FontawesomeIconHelper faGlobeEurope()
 * @method static FontawesomeIconHelper faGofore()
 * @method static FontawesomeIconHelper faGolfBall()
 * @method static FontawesomeIconHelper faGoodreads()
 * @method static FontawesomeIconHelper faGoodreadsG()
 * @method static FontawesomeIconHelper faGoogle()
 * @method static FontawesomeIconHelper faGoogleDrive()
 * @method static FontawesomeIconHelper faGooglePlay()
 * @method static FontawesomeIconHelper faGooglePlus()
 * @method static FontawesomeIconHelper faGooglePlusG()
 * @method static FontawesomeIconHelper faGooglePlusSquare()
 * @method static FontawesomeIconHelper faGoogleWallet()
 * @method static FontawesomeIconHelper faGopuram()
 * @method static FontawesomeIconHelper faGraduationCap()
 * @method static FontawesomeIconHelper faGratipay()
 * @method static FontawesomeIconHelper faGrav()
 * @method static FontawesomeIconHelper faGreaterThan()
 * @method static FontawesomeIconHelper faGreaterThanEqual()
 * @method static FontawesomeIconHelper faGrimace()
 * @method static FontawesomeIconHelper faGrin()
 * @method static FontawesomeIconHelper faGrinAlt()
 * @method static FontawesomeIconHelper faGrinBeam()
 * @method static FontawesomeIconHelper faGrinBeamSweat()
 * @method static FontawesomeIconHelper faGrinHearts()
 * @method static FontawesomeIconHelper faGrinSquint()
 * @method static FontawesomeIconHelper faGrinSquintTears()
 * @method static FontawesomeIconHelper faGrinStars()
 * @method static FontawesomeIconHelper faGrinTears()
 * @method static FontawesomeIconHelper faGrinTongue()
 * @method static FontawesomeIconHelper faGrinTongueSquint()
 * @method static FontawesomeIconHelper faGrinTongueWink()
 * @method static FontawesomeIconHelper faGrinWink()
 * @method static FontawesomeIconHelper faGripHorizontal()
 * @method static FontawesomeIconHelper faGripLines()
 * @method static FontawesomeIconHelper faGripLinesVertical()
 * @method static FontawesomeIconHelper faGripVertical()
 * @method static FontawesomeIconHelper faGripfire()
 * @method static FontawesomeIconHelper faGrunt()
 * @method static FontawesomeIconHelper faGuitar()
 * @method static FontawesomeIconHelper faGulp()
 * @method static FontawesomeIconHelper faHSquare()
 * @method static FontawesomeIconHelper faHackerNews()
 * @method static FontawesomeIconHelper faHackerNewsSquare()
 * @method static FontawesomeIconHelper faHackerrank()
 * @method static FontawesomeIconHelper faHamburger()
 * @method static FontawesomeIconHelper faHammer()
 * @method static FontawesomeIconHelper faHamsa()
 * @method static FontawesomeIconHelper faHandHolding()
 * @method static FontawesomeIconHelper faHandHoldingHeart()
 * @method static FontawesomeIconHelper faHandHoldingUsd()
 * @method static FontawesomeIconHelper faHandLizard()
 * @method static FontawesomeIconHelper faHandMiddleFinger()
 * @method static FontawesomeIconHelper faHandPaper()
 * @method static FontawesomeIconHelper faHandPeace()
 * @method static FontawesomeIconHelper faHandPointDown()
 * @method static FontawesomeIconHelper faHandPointLeft()
 * @method static FontawesomeIconHelper faHandPointRight()
 * @method static FontawesomeIconHelper faHandPointUp()
 * @method static FontawesomeIconHelper faHandPointer()
 * @method static FontawesomeIconHelper faHandRock()
 * @method static FontawesomeIconHelper faHandScissors()
 * @method static FontawesomeIconHelper faHandSpock()
 * @method static FontawesomeIconHelper faHands()
 * @method static FontawesomeIconHelper faHandsHelping()
 * @method static FontawesomeIconHelper faHandshake()
 * @method static FontawesomeIconHelper faHanukiah()
 * @method static FontawesomeIconHelper faHardHat()
 * @method static FontawesomeIconHelper faHashtag()
 * @method static FontawesomeIconHelper faHatWizard()
 * @method static FontawesomeIconHelper faHaykal()
 * @method static FontawesomeIconHelper faHdd()
 * @method static FontawesomeIconHelper faHeading()
 * @method static FontawesomeIconHelper faHeadphones()
 * @method static FontawesomeIconHelper faHeadphonesAlt()
 * @method static FontawesomeIconHelper faHeadset()
 * @method static FontawesomeIconHelper faHeart()
 * @method static FontawesomeIconHelper faHeartBroken()
 * @method static FontawesomeIconHelper faHeartbeat()
 * @method static FontawesomeIconHelper faHelicopter()
 * @method static FontawesomeIconHelper faHighlighter()
 * @method static FontawesomeIconHelper faHiking()
 * @method static FontawesomeIconHelper faHippo()
 * @method static FontawesomeIconHelper faHips()
 * @method static FontawesomeIconHelper faHireAHelper()
 * @method static FontawesomeIconHelper faHistory()
 * @method static FontawesomeIconHelper faHockeyPuck()
 * @method static FontawesomeIconHelper faHollyBerry()
 * @method static FontawesomeIconHelper faHome()
 * @method static FontawesomeIconHelper faHooli()
 * @method static FontawesomeIconHelper faHornbill()
 * @method static FontawesomeIconHelper faHorse()
 * @method static FontawesomeIconHelper faHorseHead()
 * @method static FontawesomeIconHelper faHospital()
 * @method static FontawesomeIconHelper faHospitalAlt()
 * @method static FontawesomeIconHelper faHospitalSymbol()
 * @method static FontawesomeIconHelper faHotTub()
 * @method static FontawesomeIconHelper faHotdog()
 * @method static FontawesomeIconHelper faHotel()
 * @method static FontawesomeIconHelper faHotjar()
 * @method static FontawesomeIconHelper faHourglass()
 * @method static FontawesomeIconHelper faHourglassEnd()
 * @method static FontawesomeIconHelper faHourglassHalf()
 * @method static FontawesomeIconHelper faHourglassStart()
 * @method static FontawesomeIconHelper faHouseDamage()
 * @method static FontawesomeIconHelper faHouzz()
 * @method static FontawesomeIconHelper faHryvnia()
 * @method static FontawesomeIconHelper faHtml5()
 * @method static FontawesomeIconHelper faHubspot()
 * @method static FontawesomeIconHelper faICursor()
 * @method static FontawesomeIconHelper faIceCream()
 * @method static FontawesomeIconHelper faIcicles()
 * @method static FontawesomeIconHelper faIcons()
 * @method static FontawesomeIconHelper faIdBadge()
 * @method static FontawesomeIconHelper faIdCard()
 * @method static FontawesomeIconHelper faIdCardAlt()
 * @method static FontawesomeIconHelper faIgloo()
 * @method static FontawesomeIconHelper faImage()
 * @method static FontawesomeIconHelper faImages()
 * @method static FontawesomeIconHelper faImdb()
 * @method static FontawesomeIconHelper faInbox()
 * @method static FontawesomeIconHelper faIndent()
 * @method static FontawesomeIconHelper faIndustry()
 * @method static FontawesomeIconHelper faInfinity()
 * @method static FontawesomeIconHelper faInfo()
 * @method static FontawesomeIconHelper faInfoCircle()
 * @method static FontawesomeIconHelper faInstagram()
 * @method static FontawesomeIconHelper faIntercom()
 * @method static FontawesomeIconHelper faInternetExplorer()
 * @method static FontawesomeIconHelper faInvision()
 * @method static FontawesomeIconHelper faIoxhost()
 * @method static FontawesomeIconHelper faItalic()
 * @method static FontawesomeIconHelper faItchIo()
 * @method static FontawesomeIconHelper faItunes()
 * @method static FontawesomeIconHelper faItunesNote()
 * @method static FontawesomeIconHelper faJava()
 * @method static FontawesomeIconHelper faJedi()
 * @method static FontawesomeIconHelper faJediOrder()
 * @method static FontawesomeIconHelper faJenkins()
 * @method static FontawesomeIconHelper faJira()
 * @method static FontawesomeIconHelper faJoget()
 * @method static FontawesomeIconHelper faJoint()
 * @method static FontawesomeIconHelper faJoomla()
 * @method static FontawesomeIconHelper faJournalWhills()
 * @method static FontawesomeIconHelper faJs()
 * @method static FontawesomeIconHelper faJsSquare()
 * @method static FontawesomeIconHelper faJsfiddle()
 * @method static FontawesomeIconHelper faKaaba()
 * @method static FontawesomeIconHelper faKaggle()
 * @method static FontawesomeIconHelper faKey()
 * @method static FontawesomeIconHelper faKeybase()
 * @method static FontawesomeIconHelper faKeyboard()
 * @method static FontawesomeIconHelper faKeycdn()
 * @method static FontawesomeIconHelper faKhanda()
 * @method static FontawesomeIconHelper faKickstarter()
 * @method static FontawesomeIconHelper faKickstarterK()
 * @method static FontawesomeIconHelper faKiss()
 * @method static FontawesomeIconHelper faKissBeam()
 * @method static FontawesomeIconHelper faKissWinkHeart()
 * @method static FontawesomeIconHelper faKiwiBird()
 * @method static FontawesomeIconHelper faKorvue()
 * @method static FontawesomeIconHelper faLandmark()
 * @method static FontawesomeIconHelper faLanguage()
 * @method static FontawesomeIconHelper faLaptop()
 * @method static FontawesomeIconHelper faLaptopCode()
 * @method static FontawesomeIconHelper faLaptopMedical()
 * @method static FontawesomeIconHelper faLaravel()
 * @method static FontawesomeIconHelper faLastfm()
 * @method static FontawesomeIconHelper faLastfmSquare()
 * @method static FontawesomeIconHelper faLaugh()
 * @method static FontawesomeIconHelper faLaughBeam()
 * @method static FontawesomeIconHelper faLaughSquint()
 * @method static FontawesomeIconHelper faLaughWink()
 * @method static FontawesomeIconHelper faLayerGroup()
 * @method static FontawesomeIconHelper faLeaf()
 * @method static FontawesomeIconHelper faLeanpub()
 * @method static FontawesomeIconHelper faLemon()
 * @method static FontawesomeIconHelper faLess()
 * @method static FontawesomeIconHelper faLessThan()
 * @method static FontawesomeIconHelper faLessThanEqual()
 * @method static FontawesomeIconHelper faLevelDownAlt()
 * @method static FontawesomeIconHelper faLevelUpAlt()
 * @method static FontawesomeIconHelper faLifeRing()
 * @method static FontawesomeIconHelper faLightbulb()
 * @method static FontawesomeIconHelper faLine()
 * @method static FontawesomeIconHelper faLink()
 * @method static FontawesomeIconHelper faLinkedin()
 * @method static FontawesomeIconHelper faLinkedinIn()
 * @method static FontawesomeIconHelper faLinode()
 * @method static FontawesomeIconHelper faLinux()
 * @method static FontawesomeIconHelper faLiraSign()
 * @method static FontawesomeIconHelper faList()
 * @method static FontawesomeIconHelper faListAlt()
 * @method static FontawesomeIconHelper faListOl()
 * @method static FontawesomeIconHelper faListUl()
 * @method static FontawesomeIconHelper faLocationArrow()
 * @method static FontawesomeIconHelper faLock()
 * @method static FontawesomeIconHelper faLockOpen()
 * @method static FontawesomeIconHelper faLongArrowAltDown()
 * @method static FontawesomeIconHelper faLongArrowAltLeft()
 * @method static FontawesomeIconHelper faLongArrowAltRight()
 * @method static FontawesomeIconHelper faLongArrowAltUp()
 * @method static FontawesomeIconHelper faLowVision()
 * @method static FontawesomeIconHelper faLuggageCart()
 * @method static FontawesomeIconHelper faLyft()
 * @method static FontawesomeIconHelper faMagento()
 * @method static FontawesomeIconHelper faMagic()
 * @method static FontawesomeIconHelper faMagnet()
 * @method static FontawesomeIconHelper faMailBulk()
 * @method static FontawesomeIconHelper faMailchimp()
 * @method static FontawesomeIconHelper faMale()
 * @method static FontawesomeIconHelper faMandalorian()
 * @method static FontawesomeIconHelper faMap()
 * @method static FontawesomeIconHelper faMapMarked()
 * @method static FontawesomeIconHelper faMapMarkedAlt()
 * @method static FontawesomeIconHelper faMapMarker()
 * @method static FontawesomeIconHelper faMapMarkerAlt()
 * @method static FontawesomeIconHelper faMapPin()
 * @method static FontawesomeIconHelper faMapSigns()
 * @method static FontawesomeIconHelper faMarkdown()
 * @method static FontawesomeIconHelper faMarker()
 * @method static FontawesomeIconHelper faMars()
 * @method static FontawesomeIconHelper faMarsDouble()
 * @method static FontawesomeIconHelper faMarsStroke()
 * @method static FontawesomeIconHelper faMarsStrokeH()
 * @method static FontawesomeIconHelper faMarsStrokeV()
 * @method static FontawesomeIconHelper faMask()
 * @method static FontawesomeIconHelper faMastodon()
 * @method static FontawesomeIconHelper faMaxcdn()
 * @method static FontawesomeIconHelper faMedal()
 * @method static FontawesomeIconHelper faMedapps()
 * @method static FontawesomeIconHelper faMedium()
 * @method static FontawesomeIconHelper faMediumM()
 * @method static FontawesomeIconHelper faMedkit()
 * @method static FontawesomeIconHelper faMedrt()
 * @method static FontawesomeIconHelper faMeetup()
 * @method static FontawesomeIconHelper faMegaport()
 * @method static FontawesomeIconHelper faMeh()
 * @method static FontawesomeIconHelper faMehBlank()
 * @method static FontawesomeIconHelper faMehRollingEyes()
 * @method static FontawesomeIconHelper faMemory()
 * @method static FontawesomeIconHelper faMendeley()
 * @method static FontawesomeIconHelper faMenorah()
 * @method static FontawesomeIconHelper faMercury()
 * @method static FontawesomeIconHelper faMeteor()
 * @method static FontawesomeIconHelper faMicrochip()
 * @method static FontawesomeIconHelper faMicrophone()
 * @method static FontawesomeIconHelper faMicrophoneAlt()
 * @method static FontawesomeIconHelper faMicrophoneAltSlash()
 * @method static FontawesomeIconHelper faMicrophoneSlash()
 * @method static FontawesomeIconHelper faMicroscope()
 * @method static FontawesomeIconHelper faMicrosoft()
 * @method static FontawesomeIconHelper faMinus()
 * @method static FontawesomeIconHelper faMinusCircle()
 * @method static FontawesomeIconHelper faMinusSquare()
 * @method static FontawesomeIconHelper faMitten()
 * @method static FontawesomeIconHelper faMix()
 * @method static FontawesomeIconHelper faMixcloud()
 * @method static FontawesomeIconHelper faMizuni()
 * @method static FontawesomeIconHelper faMobile()
 * @method static FontawesomeIconHelper faMobileAlt()
 * @method static FontawesomeIconHelper faModx()
 * @method static FontawesomeIconHelper faMonero()
 * @method static FontawesomeIconHelper faMoneyBill()
 * @method static FontawesomeIconHelper faMoneyBillAlt()
 * @method static FontawesomeIconHelper faMoneyBillWave()
 * @method static FontawesomeIconHelper faMoneyBillWaveAlt()
 * @method static FontawesomeIconHelper faMoneyCheck()
 * @method static FontawesomeIconHelper faMoneyCheckAlt()
 * @method static FontawesomeIconHelper faMonument()
 * @method static FontawesomeIconHelper faMoon()
 * @method static FontawesomeIconHelper faMortarPestle()
 * @method static FontawesomeIconHelper faMosque()
 * @method static FontawesomeIconHelper faMotorcycle()
 * @method static FontawesomeIconHelper faMountain()
 * @method static FontawesomeIconHelper faMousePointer()
 * @method static FontawesomeIconHelper faMugHot()
 * @method static FontawesomeIconHelper faMusic()
 * @method static FontawesomeIconHelper faNapster()
 * @method static FontawesomeIconHelper faNeos()
 * @method static FontawesomeIconHelper faNetworkWired()
 * @method static FontawesomeIconHelper faNeuter()
 * @method static FontawesomeIconHelper faNewspaper()
 * @method static FontawesomeIconHelper faNimblr()
 * @method static FontawesomeIconHelper faNode()
 * @method static FontawesomeIconHelper faNodeJs()
 * @method static FontawesomeIconHelper faNotEqual()
 * @method static FontawesomeIconHelper faNotesMedical()
 * @method static FontawesomeIconHelper faNpm()
 * @method static FontawesomeIconHelper faNs8()
 * @method static FontawesomeIconHelper faNutritionix()
 * @method static FontawesomeIconHelper faObjectGroup()
 * @method static FontawesomeIconHelper faObjectUngroup()
 * @method static FontawesomeIconHelper faOdnoklassniki()
 * @method static FontawesomeIconHelper faOdnoklassnikiSquare()
 * @method static FontawesomeIconHelper faOilCan()
 * @method static FontawesomeIconHelper faOldRepublic()
 * @method static FontawesomeIconHelper faOm()
 * @method static FontawesomeIconHelper faOpencart()
 * @method static FontawesomeIconHelper faOpenid()
 * @method static FontawesomeIconHelper faOpera()
 * @method static FontawesomeIconHelper faOptinMonster()
 * @method static FontawesomeIconHelper faOsi()
 * @method static FontawesomeIconHelper faOtter()
 * @method static FontawesomeIconHelper faOutdent()
 * @method static FontawesomeIconHelper faPage4()
 * @method static FontawesomeIconHelper faPagelines()
 * @method static FontawesomeIconHelper faPager()
 * @method static FontawesomeIconHelper faPaintBrush()
 * @method static FontawesomeIconHelper faPaintRoller()
 * @method static FontawesomeIconHelper faPalette()
 * @method static FontawesomeIconHelper faPalfed()
 * @method static FontawesomeIconHelper faPallet()
 * @method static FontawesomeIconHelper faPaperPlane()
 * @method static FontawesomeIconHelper faPaperclip()
 * @method static FontawesomeIconHelper faParachuteBox()
 * @method static FontawesomeIconHelper faParagraph()
 * @method static FontawesomeIconHelper faParking()
 * @method static FontawesomeIconHelper faPassport()
 * @method static FontawesomeIconHelper faPastafarianism()
 * @method static FontawesomeIconHelper faPaste()
 * @method static FontawesomeIconHelper faPatreon()
 * @method static FontawesomeIconHelper faPause()
 * @method static FontawesomeIconHelper faPauseCircle()
 * @method static FontawesomeIconHelper faPaw()
 * @method static FontawesomeIconHelper faPaypal()
 * @method static FontawesomeIconHelper faPeace()
 * @method static FontawesomeIconHelper faPen()
 * @method static FontawesomeIconHelper faPenAlt()
 * @method static FontawesomeIconHelper faPenFancy()
 * @method static FontawesomeIconHelper faPenNib()
 * @method static FontawesomeIconHelper faPenSquare()
 * @method static FontawesomeIconHelper faPencilAlt()
 * @method static FontawesomeIconHelper faPencilRuler()
 * @method static FontawesomeIconHelper faPennyArcade()
 * @method static FontawesomeIconHelper faPeopleCarry()
 * @method static FontawesomeIconHelper faPepperHot()
 * @method static FontawesomeIconHelper faPercent()
 * @method static FontawesomeIconHelper faPercentage()
 * @method static FontawesomeIconHelper faPeriscope()
 * @method static FontawesomeIconHelper faPersonBooth()
 * @method static FontawesomeIconHelper faPhabricator()
 * @method static FontawesomeIconHelper faPhoenixFramework()
 * @method static FontawesomeIconHelper faPhoenixSquadron()
 * @method static FontawesomeIconHelper faPhone()
 * @method static FontawesomeIconHelper faPhoneAlt()
 * @method static FontawesomeIconHelper faPhoneSlash()
 * @method static FontawesomeIconHelper faPhoneSquare()
 * @method static FontawesomeIconHelper faPhoneSquareAlt()
 * @method static FontawesomeIconHelper faPhoneVolume()
 * @method static FontawesomeIconHelper faPhotoVideo()
 * @method static FontawesomeIconHelper faPhp()
 * @method static FontawesomeIconHelper faPiedPiper()
 * @method static FontawesomeIconHelper faPiedPiperAlt()
 * @method static FontawesomeIconHelper faPiedPiperHat()
 * @method static FontawesomeIconHelper faPiedPiperPp()
 * @method static FontawesomeIconHelper faPiggyBank()
 * @method static FontawesomeIconHelper faPills()
 * @method static FontawesomeIconHelper faPinterest()
 * @method static FontawesomeIconHelper faPinterestP()
 * @method static FontawesomeIconHelper faPinterestSquare()
 * @method static FontawesomeIconHelper faPizzaSlice()
 * @method static FontawesomeIconHelper faPlaceOfWorship()
 * @method static FontawesomeIconHelper faPlane()
 * @method static FontawesomeIconHelper faPlaneArrival()
 * @method static FontawesomeIconHelper faPlaneDeparture()
 * @method static FontawesomeIconHelper faPlay()
 * @method static FontawesomeIconHelper faPlayCircle()
 * @method static FontawesomeIconHelper faPlaystation()
 * @method static FontawesomeIconHelper faPlug()
 * @method static FontawesomeIconHelper faPlus()
 * @method static FontawesomeIconHelper faPlusCircle()
 * @method static FontawesomeIconHelper faPlusSquare()
 * @method static FontawesomeIconHelper faPodcast()
 * @method static FontawesomeIconHelper faPoll()
 * @method static FontawesomeIconHelper faPollH()
 * @method static FontawesomeIconHelper faPoo()
 * @method static FontawesomeIconHelper faPooStorm()
 * @method static FontawesomeIconHelper faPoop()
 * @method static FontawesomeIconHelper faPortrait()
 * @method static FontawesomeIconHelper faPoundSign()
 * @method static FontawesomeIconHelper faPowerOff()
 * @method static FontawesomeIconHelper faPray()
 * @method static FontawesomeIconHelper faPrayingHands()
 * @method static FontawesomeIconHelper faPrescription()
 * @method static FontawesomeIconHelper faPrescriptionBottle()
 * @method static FontawesomeIconHelper faPrescriptionBottleAlt()
 * @method static FontawesomeIconHelper faPrint()
 * @method static FontawesomeIconHelper faProcedures()
 * @method static FontawesomeIconHelper faProductHunt()
 * @method static FontawesomeIconHelper faProjectDiagram()
 * @method static FontawesomeIconHelper faPushed()
 * @method static FontawesomeIconHelper faPuzzlePiece()
 * @method static FontawesomeIconHelper faPython()
 * @method static FontawesomeIconHelper faQq()
 * @method static FontawesomeIconHelper faQrcode()
 * @method static FontawesomeIconHelper faQuestion()
 * @method static FontawesomeIconHelper faQuestionCircle()
 * @method static FontawesomeIconHelper faQuidditch()
 * @method static FontawesomeIconHelper faQuinscape()
 * @method static FontawesomeIconHelper faQuora()
 * @method static FontawesomeIconHelper faQuoteLeft()
 * @method static FontawesomeIconHelper faQuoteRight()
 * @method static FontawesomeIconHelper faQuran()
 * @method static FontawesomeIconHelper faRProject()
 * @method static FontawesomeIconHelper faRadiation()
 * @method static FontawesomeIconHelper faRadiationAlt()
 * @method static FontawesomeIconHelper faRainbow()
 * @method static FontawesomeIconHelper faRandom()
 * @method static FontawesomeIconHelper faRaspberryPi()
 * @method static FontawesomeIconHelper faRavelry()
 * @method static FontawesomeIconHelper faReact()
 * @method static FontawesomeIconHelper faReacteurope()
 * @method static FontawesomeIconHelper faReadme()
 * @method static FontawesomeIconHelper faRebel()
 * @method static FontawesomeIconHelper faReceipt()
 * @method static FontawesomeIconHelper faRecycle()
 * @method static FontawesomeIconHelper faRedRiver()
 * @method static FontawesomeIconHelper faReddit()
 * @method static FontawesomeIconHelper faRedditAlien()
 * @method static FontawesomeIconHelper faRedditSquare()
 * @method static FontawesomeIconHelper faRedhat()
 * @method static FontawesomeIconHelper faRedo()
 * @method static FontawesomeIconHelper faRedoAlt()
 * @method static FontawesomeIconHelper faRegistered()
 * @method static FontawesomeIconHelper faRemoveFormat()
 * @method static FontawesomeIconHelper faRenren()
 * @method static FontawesomeIconHelper faReply()
 * @method static FontawesomeIconHelper faReplyAll()
 * @method static FontawesomeIconHelper faReplyd()
 * @method static FontawesomeIconHelper faRepublican()
 * @method static FontawesomeIconHelper faResearchgate()
 * @method static FontawesomeIconHelper faResolving()
 * @method static FontawesomeIconHelper faRestroom()
 * @method static FontawesomeIconHelper faRetweet()
 * @method static FontawesomeIconHelper faRev()
 * @method static FontawesomeIconHelper faRibbon()
 * @method static FontawesomeIconHelper faRing()
 * @method static FontawesomeIconHelper faRoad()
 * @method static FontawesomeIconHelper faRobot()
 * @method static FontawesomeIconHelper faRocket()
 * @method static FontawesomeIconHelper faRocketchat()
 * @method static FontawesomeIconHelper faRockrms()
 * @method static FontawesomeIconHelper faRoute()
 * @method static FontawesomeIconHelper faRss()
 * @method static FontawesomeIconHelper faRssSquare()
 * @method static FontawesomeIconHelper faRubleSign()
 * @method static FontawesomeIconHelper faRuler()
 * @method static FontawesomeIconHelper faRulerCombined()
 * @method static FontawesomeIconHelper faRulerHorizontal()
 * @method static FontawesomeIconHelper faRulerVertical()
 * @method static FontawesomeIconHelper faRunning()
 * @method static FontawesomeIconHelper faRupeeSign()
 * @method static FontawesomeIconHelper faSadCry()
 * @method static FontawesomeIconHelper faSadTear()
 * @method static FontawesomeIconHelper faSafari()
 * @method static FontawesomeIconHelper faSalesforce()
 * @method static FontawesomeIconHelper faSass()
 * @method static FontawesomeIconHelper faSatellite()
 * @method static FontawesomeIconHelper faSatelliteDish()
 * @method static FontawesomeIconHelper faSave()
 * @method static FontawesomeIconHelper faSchlix()
 * @method static FontawesomeIconHelper faSchool()
 * @method static FontawesomeIconHelper faScrewdriver()
 * @method static FontawesomeIconHelper faScribd()
 * @method static FontawesomeIconHelper faScroll()
 * @method static FontawesomeIconHelper faSdCard()
 * @method static FontawesomeIconHelper faSearch()
 * @method static FontawesomeIconHelper faSearchDollar()
 * @method static FontawesomeIconHelper faSearchLocation()
 * @method static FontawesomeIconHelper faSearchMinus()
 * @method static FontawesomeIconHelper faSearchPlus()
 * @method static FontawesomeIconHelper faSearchengin()
 * @method static FontawesomeIconHelper faSeedling()
 * @method static FontawesomeIconHelper faSellcast()
 * @method static FontawesomeIconHelper faSellsy()
 * @method static FontawesomeIconHelper faServer()
 * @method static FontawesomeIconHelper faServicestack()
 * @method static FontawesomeIconHelper faShapes()
 * @method static FontawesomeIconHelper faShare()
 * @method static FontawesomeIconHelper faShareAlt()
 * @method static FontawesomeIconHelper faShareAltSquare()
 * @method static FontawesomeIconHelper faShareSquare()
 * @method static FontawesomeIconHelper faShekelSign()
 * @method static FontawesomeIconHelper faShieldAlt()
 * @method static FontawesomeIconHelper faShip()
 * @method static FontawesomeIconHelper faShippingFast()
 * @method static FontawesomeIconHelper faShirtsinbulk()
 * @method static FontawesomeIconHelper faShoePrints()
 * @method static FontawesomeIconHelper faShoppingBag()
 * @method static FontawesomeIconHelper faShoppingBasket()
 * @method static FontawesomeIconHelper faShoppingCart()
 * @method static FontawesomeIconHelper faShopware()
 * @method static FontawesomeIconHelper faShower()
 * @method static FontawesomeIconHelper faShuttleVan()
 * @method static FontawesomeIconHelper faSign()
 * @method static FontawesomeIconHelper faSignInAlt()
 * @method static FontawesomeIconHelper faSignLanguage()
 * @method static FontawesomeIconHelper faSignOutAlt()
 * @method static FontawesomeIconHelper faSignal()
 * @method static FontawesomeIconHelper faSignature()
 * @method static FontawesomeIconHelper faSimCard()
 * @method static FontawesomeIconHelper faSimplybuilt()
 * @method static FontawesomeIconHelper faSistrix()
 * @method static FontawesomeIconHelper faSitemap()
 * @method static FontawesomeIconHelper faSith()
 * @method static FontawesomeIconHelper faSkating()
 * @method static FontawesomeIconHelper faSketch()
 * @method static FontawesomeIconHelper faSkiing()
 * @method static FontawesomeIconHelper faSkiingNordic()
 * @method static FontawesomeIconHelper faSkull()
 * @method static FontawesomeIconHelper faSkullCrossbones()
 * @method static FontawesomeIconHelper faSkyatlas()
 * @method static FontawesomeIconHelper faSkype()
 * @method static FontawesomeIconHelper faSlack()
 * @method static FontawesomeIconHelper faSlackHash()
 * @method static FontawesomeIconHelper faSlash()
 * @method static FontawesomeIconHelper faSleigh()
 * @method static FontawesomeIconHelper faSlidersH()
 * @method static FontawesomeIconHelper faSlideshare()
 * @method static FontawesomeIconHelper faSmile()
 * @method static FontawesomeIconHelper faSmileBeam()
 * @method static FontawesomeIconHelper faSmileWink()
 * @method static FontawesomeIconHelper faSmog()
 * @method static FontawesomeIconHelper faSmoking()
 * @method static FontawesomeIconHelper faSmokingBan()
 * @method static FontawesomeIconHelper faSms()
 * @method static FontawesomeIconHelper faSnapchat()
 * @method static FontawesomeIconHelper faSnapchatGhost()
 * @method static FontawesomeIconHelper faSnapchatSquare()
 * @method static FontawesomeIconHelper faSnowboarding()
 * @method static FontawesomeIconHelper faSnowflake()
 * @method static FontawesomeIconHelper faSnowman()
 * @method static FontawesomeIconHelper faSnowplow()
 * @method static FontawesomeIconHelper faSocks()
 * @method static FontawesomeIconHelper faSolarPanel()
 * @method static FontawesomeIconHelper faSort()
 * @method static FontawesomeIconHelper faSortAlphaDown()
 * @method static FontawesomeIconHelper faSortAlphaDownAlt()
 * @method static FontawesomeIconHelper faSortAlphaUp()
 * @method static FontawesomeIconHelper faSortAlphaUpAlt()
 * @method static FontawesomeIconHelper faSortAmountDown()
 * @method static FontawesomeIconHelper faSortAmountDownAlt()
 * @method static FontawesomeIconHelper faSortAmountUp()
 * @method static FontawesomeIconHelper faSortAmountUpAlt()
 * @method static FontawesomeIconHelper faSortDown()
 * @method static FontawesomeIconHelper faSortNumericDown()
 * @method static FontawesomeIconHelper faSortNumericDownAlt()
 * @method static FontawesomeIconHelper faSortNumericUp()
 * @method static FontawesomeIconHelper faSortNumericUpAlt()
 * @method static FontawesomeIconHelper faSortUp()
 * @method static FontawesomeIconHelper faSoundcloud()
 * @method static FontawesomeIconHelper faSourcetree()
 * @method static FontawesomeIconHelper faSpa()
 * @method static FontawesomeIconHelper faSpaceShuttle()
 * @method static FontawesomeIconHelper faSpeakap()
 * @method static FontawesomeIconHelper faSpeakerDeck()
 * @method static FontawesomeIconHelper faSpellCheck()
 * @method static FontawesomeIconHelper faSpider()
 * @method static FontawesomeIconHelper faSpinner()
 * @method static FontawesomeIconHelper faSplotch()
 * @method static FontawesomeIconHelper faSpotify()
 * @method static FontawesomeIconHelper faSprayCan()
 * @method static FontawesomeIconHelper faSquare()
 * @method static FontawesomeIconHelper faSquareFull()
 * @method static FontawesomeIconHelper faSquareRootAlt()
 * @method static FontawesomeIconHelper faSquarespace()
 * @method static FontawesomeIconHelper faStackExchange()
 * @method static FontawesomeIconHelper faStackOverflow()
 * @method static FontawesomeIconHelper faStackpath()
 * @method static FontawesomeIconHelper faStamp()
 * @method static FontawesomeIconHelper faStar()
 * @method static FontawesomeIconHelper faStarAndCrescent()
 * @method static FontawesomeIconHelper faStarHalf()
 * @method static FontawesomeIconHelper faStarHalfAlt()
 * @method static FontawesomeIconHelper faStarOfDavid()
 * @method static FontawesomeIconHelper faStarOfLife()
 * @method static FontawesomeIconHelper faStaylinked()
 * @method static FontawesomeIconHelper faSteam()
 * @method static FontawesomeIconHelper faSteamSquare()
 * @method static FontawesomeIconHelper faSteamSymbol()
 * @method static FontawesomeIconHelper faStepBackward()
 * @method static FontawesomeIconHelper faStepForward()
 * @method static FontawesomeIconHelper faStethoscope()
 * @method static FontawesomeIconHelper faStickerMule()
 * @method static FontawesomeIconHelper faStickyNote()
 * @method static FontawesomeIconHelper faStop()
 * @method static FontawesomeIconHelper faStopCircle()
 * @method static FontawesomeIconHelper faStopwatch()
 * @method static FontawesomeIconHelper faStore()
 * @method static FontawesomeIconHelper faStoreAlt()
 * @method static FontawesomeIconHelper faStrava()
 * @method static FontawesomeIconHelper faStream()
 * @method static FontawesomeIconHelper faStreetView()
 * @method static FontawesomeIconHelper faStrikethrough()
 * @method static FontawesomeIconHelper faStripe()
 * @method static FontawesomeIconHelper faStripeS()
 * @method static FontawesomeIconHelper faStroopwafel()
 * @method static FontawesomeIconHelper faStudiovinari()
 * @method static FontawesomeIconHelper faStumbleupon()
 * @method static FontawesomeIconHelper faStumbleuponCircle()
 * @method static FontawesomeIconHelper faSubscript()
 * @method static FontawesomeIconHelper faSubway()
 * @method static FontawesomeIconHelper faSuitcase()
 * @method static FontawesomeIconHelper faSuitcaseRolling()
 * @method static FontawesomeIconHelper faSun()
 * @method static FontawesomeIconHelper faSuperpowers()
 * @method static FontawesomeIconHelper faSuperscript()
 * @method static FontawesomeIconHelper faSupple()
 * @method static FontawesomeIconHelper faSurprise()
 * @method static FontawesomeIconHelper faSuse()
 * @method static FontawesomeIconHelper faSwatchbook()
 * @method static FontawesomeIconHelper faSwimmer()
 * @method static FontawesomeIconHelper faSwimmingPool()
 * @method static FontawesomeIconHelper faSymfony()
 * @method static FontawesomeIconHelper faSynagogue()
 * @method static FontawesomeIconHelper faSync()
 * @method static FontawesomeIconHelper faSyncAlt()
 * @method static FontawesomeIconHelper faSyringe()
 * @method static FontawesomeIconHelper faTable()
 * @method static FontawesomeIconHelper faTableTennis()
 * @method static FontawesomeIconHelper faTablet()
 * @method static FontawesomeIconHelper faTabletAlt()
 * @method static FontawesomeIconHelper faTablets()
 * @method static FontawesomeIconHelper faTachometerAlt()
 * @method static FontawesomeIconHelper faTag()
 * @method static FontawesomeIconHelper faTags()
 * @method static FontawesomeIconHelper faTape()
 * @method static FontawesomeIconHelper faTasks()
 * @method static FontawesomeIconHelper faTaxi()
 * @method static FontawesomeIconHelper faTeamspeak()
 * @method static FontawesomeIconHelper faTeeth()
 * @method static FontawesomeIconHelper faTeethOpen()
 * @method static FontawesomeIconHelper faTelegram()
 * @method static FontawesomeIconHelper faTelegramPlane()
 * @method static FontawesomeIconHelper faTemperatureHigh()
 * @method static FontawesomeIconHelper faTemperatureLow()
 * @method static FontawesomeIconHelper faTencentWeibo()
 * @method static FontawesomeIconHelper faTenge()
 * @method static FontawesomeIconHelper faTerminal()
 * @method static FontawesomeIconHelper faTextHeight()
 * @method static FontawesomeIconHelper faTextWidth()
 * @method static FontawesomeIconHelper faTh()
 * @method static FontawesomeIconHelper faThLarge()
 * @method static FontawesomeIconHelper faThList()
 * @method static FontawesomeIconHelper faTheRedYeti()
 * @method static FontawesomeIconHelper faTheaterMasks()
 * @method static FontawesomeIconHelper faThemeco()
 * @method static FontawesomeIconHelper faThemeisle()
 * @method static FontawesomeIconHelper faThermometer()
 * @method static FontawesomeIconHelper faThermometerEmpty()
 * @method static FontawesomeIconHelper faThermometerFull()
 * @method static FontawesomeIconHelper faThermometerHalf()
 * @method static FontawesomeIconHelper faThermometerQuarter()
 * @method static FontawesomeIconHelper faThermometerThreeQuarters()
 * @method static FontawesomeIconHelper faThinkPeaks()
 * @method static FontawesomeIconHelper faThumbsDown()
 * @method static FontawesomeIconHelper faThumbsUp()
 * @method static FontawesomeIconHelper faThumbtack()
 * @method static FontawesomeIconHelper faTicketAlt()
 * @method static FontawesomeIconHelper faTimes()
 * @method static FontawesomeIconHelper faTimesCircle()
 * @method static FontawesomeIconHelper faTint()
 * @method static FontawesomeIconHelper faTintSlash()
 * @method static FontawesomeIconHelper faTired()
 * @method static FontawesomeIconHelper faToggleOff()
 * @method static FontawesomeIconHelper faToggleOn()
 * @method static FontawesomeIconHelper faToilet()
 * @method static FontawesomeIconHelper faToiletPaper()
 * @method static FontawesomeIconHelper faToolbox()
 * @method static FontawesomeIconHelper faTools()
 * @method static FontawesomeIconHelper faTooth()
 * @method static FontawesomeIconHelper faTorah()
 * @method static FontawesomeIconHelper faToriiGate()
 * @method static FontawesomeIconHelper faTractor()
 * @method static FontawesomeIconHelper faTradeFederation()
 * @method static FontawesomeIconHelper faTrademark()
 * @method static FontawesomeIconHelper faTrafficLight()
 * @method static FontawesomeIconHelper faTrain()
 * @method static FontawesomeIconHelper faTram()
 * @method static FontawesomeIconHelper faTransgender()
 * @method static FontawesomeIconHelper faTransgenderAlt()
 * @method static FontawesomeIconHelper faTrash()
 * @method static FontawesomeIconHelper faTrashAlt()
 * @method static FontawesomeIconHelper faTrashRestore()
 * @method static FontawesomeIconHelper faTrashRestoreAlt()
 * @method static FontawesomeIconHelper faTree()
 * @method static FontawesomeIconHelper faTrello()
 * @method static FontawesomeIconHelper faTripadvisor()
 * @method static FontawesomeIconHelper faTrophy()
 * @method static FontawesomeIconHelper faTruck()
 * @method static FontawesomeIconHelper faTruckLoading()
 * @method static FontawesomeIconHelper faTruckMonster()
 * @method static FontawesomeIconHelper faTruckMoving()
 * @method static FontawesomeIconHelper faTruckPickup()
 * @method static FontawesomeIconHelper faTshirt()
 * @method static FontawesomeIconHelper faTty()
 * @method static FontawesomeIconHelper faTumblr()
 * @method static FontawesomeIconHelper faTumblrSquare()
 * @method static FontawesomeIconHelper faTv()
 * @method static FontawesomeIconHelper faTwitch()
 * @method static FontawesomeIconHelper faTwitter()
 * @method static FontawesomeIconHelper faTwitterSquare()
 * @method static FontawesomeIconHelper faTypo3()
 * @method static FontawesomeIconHelper faUber()
 * @method static FontawesomeIconHelper faUbuntu()
 * @method static FontawesomeIconHelper faUikit()
 * @method static FontawesomeIconHelper faUmbrella()
 * @method static FontawesomeIconHelper faUmbrellaBeach()
 * @method static FontawesomeIconHelper faUnderline()
 * @method static FontawesomeIconHelper faUndo()
 * @method static FontawesomeIconHelper faUndoAlt()
 * @method static FontawesomeIconHelper faUniregistry()
 * @method static FontawesomeIconHelper faUniversalAccess()
 * @method static FontawesomeIconHelper faUniversity()
 * @method static FontawesomeIconHelper faUnlink()
 * @method static FontawesomeIconHelper faUnlock()
 * @method static FontawesomeIconHelper faUnlockAlt()
 * @method static FontawesomeIconHelper faUntappd()
 * @method static FontawesomeIconHelper faUpload()
 * @method static FontawesomeIconHelper faUps()
 * @method static FontawesomeIconHelper faUsb()
 * @method static FontawesomeIconHelper faUser()
 * @method static FontawesomeIconHelper faUserAlt()
 * @method static FontawesomeIconHelper faUserAltSlash()
 * @method static FontawesomeIconHelper faUserAstronaut()
 * @method static FontawesomeIconHelper faUserCheck()
 * @method static FontawesomeIconHelper faUserCircle()
 * @method static FontawesomeIconHelper faUserClock()
 * @method static FontawesomeIconHelper faUserCog()
 * @method static FontawesomeIconHelper faUserEdit()
 * @method static FontawesomeIconHelper faUserFriends()
 * @method static FontawesomeIconHelper faUserGraduate()
 * @method static FontawesomeIconHelper faUserInjured()
 * @method static FontawesomeIconHelper faUserLock()
 * @method static FontawesomeIconHelper faUserMd()
 * @method static FontawesomeIconHelper faUserMinus()
 * @method static FontawesomeIconHelper faUserNinja()
 * @method static FontawesomeIconHelper faUserNurse()
 * @method static FontawesomeIconHelper faUserPlus()
 * @method static FontawesomeIconHelper faUserSecret()
 * @method static FontawesomeIconHelper faUserShield()
 * @method static FontawesomeIconHelper faUserSlash()
 * @method static FontawesomeIconHelper faUserTag()
 * @method static FontawesomeIconHelper faUserTie()
 * @method static FontawesomeIconHelper faUserTimes()
 * @method static FontawesomeIconHelper faUsers()
 * @method static FontawesomeIconHelper faUsersCog()
 * @method static FontawesomeIconHelper faUsps()
 * @method static FontawesomeIconHelper faUssunnah()
 * @method static FontawesomeIconHelper faUtensilSpoon()
 * @method static FontawesomeIconHelper faUtensils()
 * @method static FontawesomeIconHelper faVaadin()
 * @method static FontawesomeIconHelper faVectorSquare()
 * @method static FontawesomeIconHelper faVenus()
 * @method static FontawesomeIconHelper faVenusDouble()
 * @method static FontawesomeIconHelper faVenusMars()
 * @method static FontawesomeIconHelper faViacoin()
 * @method static FontawesomeIconHelper faViadeo()
 * @method static FontawesomeIconHelper faViadeoSquare()
 * @method static FontawesomeIconHelper faVial()
 * @method static FontawesomeIconHelper faVials()
 * @method static FontawesomeIconHelper faViber()
 * @method static FontawesomeIconHelper faVideo()
 * @method static FontawesomeIconHelper faVideoSlash()
 * @method static FontawesomeIconHelper faVihara()
 * @method static FontawesomeIconHelper faVimeo()
 * @method static FontawesomeIconHelper faVimeoSquare()
 * @method static FontawesomeIconHelper faVimeoV()
 * @method static FontawesomeIconHelper faVine()
 * @method static FontawesomeIconHelper faVk()
 * @method static FontawesomeIconHelper faVnv()
 * @method static FontawesomeIconHelper faVoicemail()
 * @method static FontawesomeIconHelper faVolleyballBall()
 * @method static FontawesomeIconHelper faVolumeDown()
 * @method static FontawesomeIconHelper faVolumeMute()
 * @method static FontawesomeIconHelper faVolumeOff()
 * @method static FontawesomeIconHelper faVolumeUp()
 * @method static FontawesomeIconHelper faVoteYea()
 * @method static FontawesomeIconHelper faVrCardboard()
 * @method static FontawesomeIconHelper faVuejs()
 * @method static FontawesomeIconHelper faWalking()
 * @method static FontawesomeIconHelper faWallet()
 * @method static FontawesomeIconHelper faWarehouse()
 * @method static FontawesomeIconHelper faWater()
 * @method static FontawesomeIconHelper faWaveSquare()
 * @method static FontawesomeIconHelper faWaze()
 * @method static FontawesomeIconHelper faWeebly()
 * @method static FontawesomeIconHelper faWeibo()
 * @method static FontawesomeIconHelper faWeight()
 * @method static FontawesomeIconHelper faWeightHanging()
 * @method static FontawesomeIconHelper faWeixin()
 * @method static FontawesomeIconHelper faWhatsapp()
 * @method static FontawesomeIconHelper faWhatsappSquare()
 * @method static FontawesomeIconHelper faWheelchair()
 * @method static FontawesomeIconHelper faWhmcs()
 * @method static FontawesomeIconHelper faWifi()
 * @method static FontawesomeIconHelper faWikipediaW()
 * @method static FontawesomeIconHelper faWind()
 * @method static FontawesomeIconHelper faWindowClose()
 * @method static FontawesomeIconHelper faWindowMaximize()
 * @method static FontawesomeIconHelper faWindowMinimize()
 * @method static FontawesomeIconHelper faWindowRestore()
 * @method static FontawesomeIconHelper faWindows()
 * @method static FontawesomeIconHelper faWineBottle()
 * @method static FontawesomeIconHelper faWineGlass()
 * @method static FontawesomeIconHelper faWineGlassAlt()
 * @method static FontawesomeIconHelper faWix()
 * @method static FontawesomeIconHelper faWizardsOfTheCoast()
 * @method static FontawesomeIconHelper faWolfPackBattalion()
 * @method static FontawesomeIconHelper faWonSign()
 * @method static FontawesomeIconHelper faWordpress()
 * @method static FontawesomeIconHelper faWordpressSimple()
 * @method static FontawesomeIconHelper faWpbeginner()
 * @method static FontawesomeIconHelper faWpexplorer()
 * @method static FontawesomeIconHelper faWpforms()
 * @method static FontawesomeIconHelper faWpressr()
 * @method static FontawesomeIconHelper faWrench()
 * @method static FontawesomeIconHelper faXRay()
 * @method static FontawesomeIconHelper faXbox()
 * @method static FontawesomeIconHelper faXing()
 * @method static FontawesomeIconHelper faXingSquare()
 * @method static FontawesomeIconHelper faYCombinator()
 * @method static FontawesomeIconHelper faYahoo()
 * @method static FontawesomeIconHelper faYammer()
 * @method static FontawesomeIconHelper faYandex()
 * @method static FontawesomeIconHelper faYandexInternational()
 * @method static FontawesomeIconHelper faYarn()
 * @method static FontawesomeIconHelper faYelp()
 * @method static FontawesomeIconHelper faYenSign()
 * @method static FontawesomeIconHelper faYinYang()
 * @method static FontawesomeIconHelper faYoast()
 * @method static FontawesomeIconHelper faYoutube()
 * @method static FontawesomeIconHelper faYoutubeSquare()
 * @method static FontawesomeIconHelper faZhihu()
 *
 * @author Christoph Erdmann
 * @package helpers
 */
class FontawesomeIconHelper extends BaseIconHelper implements IconHelperInterface
{
    /**
     * Sets the [[type]] of the icon to 'regular'.
     */
    const TYPE_REGULAR = 'r';

    /**
     * Sets the [[type]] of the icon to 'solid'.
     */
    const TYPE_SOLID = 's';

    /**
     * Sets the [[type]] of the icon to 'light'.
     *
     * Please note: this is only available in the Pro version
     */
    const TYPE_LIGHT = 'l';

    /**
     * Sets the [[type]] of the icon to 'brands'.
     */
    const TYPE_BRAND = 'b';

    /**
     * Sets the [[size]] of the icon to the 'xs'.
     */
    const SIZE_XS = 'xs';

    /**
     * Sets the [[size]] of the icon to the 'sm'.
     */
    const SIZE_SM = 'sm';

    /**
     * Sets the [[size]] of the icon to the 'lg'.
     */
    const SIZE_LG = 'lg';

    /**
     * Sets the [[pull]] of the icon to the 'left'.
     */
    const PULL_LEFT = 'left';

    /**
     * Sets the [[pull]] of the icon to the 'right'.
     */
    const PULL_RIGHT = 'right';

    /**
     * Sets the [[animate]] of the icon to the 'pulse'.
     */
    const ANIMATE_PULSE = 'pulse';

    /**
     * Sets the [[animate]] of the icon to the 'spin'.
     */
    const ANIMATE_SPIN = 'spin';

    /**
     * @var string the name of the icon without the prefix.
     */
    public $name;

    /**
     * @var string the type of the icon, i. e. the prefix like "fas" or "far".
     * Defaults to 's' = 'solid'.
     *
     * Please note: the 'light' type is only available in the pro version.
     */
    public $type = self::TYPE_SOLID;

    /**
     * @var string|integer the size of the icon.
     * The following options are available:
     * - xs
     * - sm
     * - lg
     * - a number from 2 through 10
     */
    public $size;

    /**
     * @var boolean whether the icon has a fixed width.
     */
    public $hasFixedWidth;

    /**
     * @var string the pull option for the icon, either 'left' or 'right'.
     */
    public $pull;

    /**
     * @var boolean whether the icon has a border.
     */
    public $hasBorder;

    /**
     * @var string the animation type, can be either 'pulse' or 'spin'.
     */
    public $animate;

    /**
     * @var boolean whether to flip the icon horizontally.
     */
    public $flipHorizontal;

    /**
     * @var boolean whether to flip the icon vertically.
     */
    public $flipVertical;

    /**
     * @var float the rotation angle of the icon.
     * Negative values are possible.
     */
    public $rotate;

    /**
     * @var float how far to move the icon right.
     */
    public $right;

    /**
     * @var float how far to move the icon left.
     */
    public $left;

    /**
     * @var float how far to move the icon down.
     */
    public $down;

    /**
     * @var float how far to move the icon up.
     */
    public $up;

    /**
     * @var float the growing factor of the icon.
     */
    public $grow;

    /**
     * @var float the shrinking factor of the icon.
     */
    public $shrink;

    /**
     * @var FontawesomeIconHelper
     */
    public $mask;

    /**
     * @var
     */
    public $inverse;

    /**
     * Registers the required asset files.
     *
     * @param View $view the view object
     */
    public static function registerAssets(View $view)
    {
        FontawesomeAsset::register($view);
    }

    /**
     * Sets the [[type]] to 'solid'.
     * @return $this the current instance the current instance
     */
    public function solid()
    {
        $this->type = self::TYPE_SOLID;
        return $this;
    }

    /**
     * Sets the [[type]] to 'light'.
     *
     * This is only available in the pro version.
     *
     * @return $this the current instance the current instance
     */
    public function light()
    {
        $this->type = self::TYPE_LIGHT;
        return $this;
    }

    /**
     * Sets the [[type]] to 'brand'.
     * @return $this the current instance the current instance
     */
    public function brand()
    {
        $this->type = self::TYPE_BRAND;
        return $this;
    }

    /**
     * Sets the [[type]] to 'regular'.
     * @return $this the current instance the current instance
     */
    public function regular()
    {
        $this->type = self::TYPE_REGULAR;
        return $this;
    }

    /**
     * Sets the [[size]].
     *
     * See property docs for possible values.
     *
     * @param string|integer $size the size value
     * @return $this the current instance the current instance
     */
    public function size($size)
    {
        if (ctype_digit($size) || is_int($size)) {
            $this->size = "{$size}x";
        } else {
            $this->size = $size;
        }

        return $this;
    }

    /**
     * Sets the fixed width option.
     *
     * @return $this the current instance the current instance
     */
    public function fixedWidth()
    {
        $this->hasFixedWidth = true;
        return $this;
    }

    /**
     * Sets the [[pull]] to 'left'.
     *
     * @return $this the current instance
     */
    public function pullLeft()
    {
        $this->pull = self::PULL_LEFT;
        return $this;
    }

    /**
     * Sets the [[pull]] to 'right'.
     *
     * @return $this the current instance
     */
    public function pullRight()
    {
        $this->pull = self::PULL_RIGHT;
        return $this;
    }

    /**
     * Sets the border option.
     *
     * @return $this the current instance
     */
    public function border()
    {
        $this->hasBorder = true;
        return $this;
    }

    /**
     * Sets the [[animate]] property to 'pulse'.
     *
     * @return $this the current instance
     */
    public function pulse()
    {
        $this->animate = self::ANIMATE_PULSE;
        return $this;
    }

    /**
     * Sets the [[animate]] property to 'spin'.
     *
     * @return $this the current instance
     */
    public function spin()
    {
        $this->animate = self::ANIMATE_SPIN;
        return $this;
    }

    /**
     * Sets the [[shrink]] property.
     *
     * @param float $factor the shrinking factor
     * @return $this the current instance
     */
    public function shrink($factor)
    {
        $this->shrink = $factor;
        return $this;
    }

    /**
     * Sets the [[grow]] property.
     *
     * @param float $factor the growing factor
     * @return $this the current instance
     */
    public function grow($factor)
    {
        $this->grow = $factor;
        return $this;
    }

    /**
     * Sets the [[up]] property for icon moving.
     *
     * @param float $factor the value of how far to move the icon
     * @return $this the current instance
     */
    public function up($factor)
    {
        $this->up = $factor;
        return $this;
    }

    /**
     * Sets the [[down]] property for icon moving.
     *
     * @param float $factor the value of how far to move the icon
     * @return $this the current instance
     */
    public function down($factor)
    {
        $this->down = $factor;
        return $this;
    }

    /**
     * Sets the [[left]] property for icon moving.
     *
     * @param float $factor the value of how far to move the icon
     * @return $this the current instance
     */
    public function left($factor)
    {
        $this->left = $factor;
        return $this;
    }

    /**
     * Sets the [[right]] property for icon moving.
     *
     * @param float $factor the value of how far to move the icon
     * @return $this the current instance
     */
    public function right($factor)
    {
        $this->right = $factor;
        return $this;
    }

    /**
     * Sets the [[rotate]] property.
     *
     * @param float $angle the rotation angle, negative values are possible
     * @return $this the current instance
     */
    public function rotate($angle)
    {
        $this->rotate = $angle;
        return $this;
    }

    /**
     * Flips the icon vertically.
     *
     * @return $this the current instance
     */
    public function flipVertical()
    {
        $this->flipVertical = true;
        return $this;
    }

    /**
     * Flips the icon horizontally.
     *
     * @return $this the current instance
     */
    public function flipHorizontal()
    {
        $this->flipHorizontal = true;
        return $this;
    }

    /**
     * Inverts the icon.
     *
     * @return $this the current instance
     */
    public function inverse()
    {
        $this->inverse = true;
        return $this;
    }

    /**
     * Masks the icon with the instance.
     *
     * @param FontawesomeIconHelper $instance the masking instance
     * @return $this the current instance
     */
    public function mask(FontawesomeIconHelper $instance)
    {
        $this->mask = $instance;
        return $this;
    }

    /**
     * Renders the icon tag.
     *
     * @return string the rendered markup
     */
    public function render()
    {
        foreach ($this->getCssClasses() as $key => $cssClass) {
            Html::addCssClass($this->options, [$key => $cssClass]);
        }

        $transformation = implode(' ', $this->getTransformations());
        if ($transformation) {
            if (!ArrayHelper::keyExists('data-fa-transform', $this->options)) {
                $this->options['data-fa-transform'] = $transformation;
            } else {
                $this->options['data-fa-transform'] .= ' ' . $transformation;
            }
        }

        if ($this->mask) {
            $this->options['data-fa-mask'] = implode(' ', $this->mask->getCssClasses());
        }

        return Html::tag($this->tag, '', $this->options);
    }

    /**
     * Get the CSS classes from the configuration options.
     *
     * @return array the CSS classes
     */
    public function getCssClasses()
    {
        $cssClasses = [
            'fa-type' => "fa{$this->type}",
            'fa-name' => "fa-{$this->name}",
        ];

        if ($this->size) {
            $cssClasses['fa-size'] = "fa-{$this->size}";
        }

        if ($this->hasBorder) {
            $cssClasses['fa-border'] = 'fa-border';
        }

        if ($this->hasFixedWidth) {
            $cssClasses['fa-fw'] = 'fa-fw';
        }

        if ($this->pull) {
            $cssClasses['fa-pull'] = "fa-pull{$this->pull}";
        }

        if ($this->animate) {
            $cssClasses['fa-animate'] = "fa-{$this->animate}";
        }

        if ($this->inverse) {
            $cssClasses['fa-inverse'] = 'fa-inverse';
        }

        return $cssClasses;
    }

    /**
     * Get the transformation options.
     *
     * @return array the transformations
     */
    public function getTransformations()
    {
        $transformations = [];

        if ($this->shrink) {
            $transformations[] = "shrink-{$this->shrink}";
        }

        if ($this->grow) {
            $transformations[] = "grow-{$this->grow}";
        }

        if ($this->up) {
            $transformations[] = "up-{$this->up}";
        }

        if ($this->down) {
            $transformations[] = "down-{$this->down}";
        }

        if ($this->left) {
            $transformations[] = "left-{$this->left}";
        }

        if ($this->right) {
            $transformations[] = "right-{$this->right}";
        }

        if ($this->rotate) {
            $transformations[] = "rotate-{$this->rotate}";
        }

        if ($this->flipHorizontal) {
            $transformations[] = "flip-h";
        }

        if ($this->flipVertical) {
            $transformations[] = "flip-v";
        }

        return $transformations;
    }
}
